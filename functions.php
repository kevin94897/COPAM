<?php
/**
 * COPAM theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COPAM_THEME_VERSION', '1.0.0' );

function copam_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' )
	);
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 40,
			'width'       => 224,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array(),
		)
	);
}
add_action( 'after_setup_theme', 'copam_theme_setup' );

function copam_enqueue_assets() {
	wp_enqueue_style( 'copam-tokens', get_template_directory_uri() . '/assets/css/tokens.css', array(), COPAM_THEME_VERSION );
	wp_enqueue_style( 'copam-style', get_stylesheet_uri(), array( 'copam-tokens' ), COPAM_THEME_VERSION );

	wp_enqueue_style(
		'copam-dm-sans',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap',
		array(),
		null
	);

	wp_enqueue_script( 'copam-main', get_template_directory_uri() . '/assets/js/main.js', array(), COPAM_THEME_VERSION, true );

	// Carousels, tabs and the multi-step reclamo form only exist on the front page.
	if ( is_front_page() ) {
		wp_enqueue_script( 'copam-embla', get_template_directory_uri() . '/assets/js/embla-carousel.min.js', array(), COPAM_THEME_VERSION, true );
		wp_enqueue_script( 'copam-carousels', get_template_directory_uri() . '/assets/js/carousels.js', array( 'copam-embla' ), COPAM_THEME_VERSION, true );

		wp_enqueue_script( 'copam-reclamos-form', get_template_directory_uri() . '/assets/js/reclamos-form.js', array(), COPAM_THEME_VERSION, true );
		wp_localize_script(
			'copam-reclamos-form',
			'copamReclamoData',
			array(
				'actionUrl' => admin_url( 'admin-post.php' ),
				'nonce'     => wp_create_nonce( 'copam_reclamo_submit' ),
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'copam_enqueue_assets' );

/**
 * Trim the default WP front-end footprint we don't need for a single
 * static-style homepage (emoji script/styles, generator meta tag).
 */
function copam_trim_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'copam_trim_head' );

require get_template_directory() . '/inc/template-helpers.php';
require get_template_directory() . '/inc/reclamos-cpt.php';
require get_template_directory() . '/inc/reclamos-mail.php';
