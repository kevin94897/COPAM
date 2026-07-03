<?php
/**
 * Small shared markup helpers, replacing ButtonPrimary.astro / ButtonSecondary.astro.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render a CTA link matching the original Astro ButtonPrimary/ButtonSecondary components.
 *
 * @param string $href    Link target.
 * @param string $label   Visible label text.
 * @param string $variant 'primary' or 'secondary'.
 * @param bool   $icon    Whether to show the trailing arrow icon.
 * @param string $target  Optional link target, e.g. '_blank'.
 */
function copam_button( $href, $label, $variant = 'primary', $icon = null, $target = '' ) {
	if ( null === $icon ) {
		$icon = 'primary' === $variant;
	}

	$class = 'primary' === $variant ? 'btn-primary' : 'btn-secondary';
	$rel   = '_blank' === $target ? ' rel="noopener noreferrer"' : '';
	$targ  = $target ? sprintf( ' target="%s"', esc_attr( $target ) ) : '';

	printf(
		'<a href="%1$s" class="%2$s"%3$s%4$s>%5$s',
		esc_url( $href ),
		esc_attr( $class ),
		$targ,
		$rel,
		esc_html( $label )
	);

	if ( $icon ) {
		echo ' <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 4.5h10.182m-4-3.5 4 3.5-4 3.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	echo '</a>';
}

/**
 * Resolve the URL of the WordPress Page currently assigned to a given
 * theme page template (e.g. 'template-politica-privacidad.php'), so
 * links stay correct regardless of the slug an editor chose in wp-admin.
 *
 * @param string $template_filename Template file name, relative to the theme root.
 * @return string Page URL, or '#' if no page uses that template yet.
 */
function copam_legal_page_url( $template_filename ) {
	static $cache = array();

	if ( isset( $cache[ $template_filename ] ) ) {
		return $cache[ $template_filename ];
	}

	$pages = get_posts(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'meta_key'       => '_wp_page_template',
			'meta_value'     => $template_filename,
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);

	$cache[ $template_filename ] = $pages ? get_permalink( $pages[0] ) : '#';

	return $cache[ $template_filename ];
}
