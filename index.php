<?php
/**
 * Fallback template, required by WordPress theme conventions.
 * The real homepage lives in front-page.php; this covers any request
 * WordPress can't route through the front-page template.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<?php get_template_part( 'template-parts/hero' ); ?>
<?php get_template_part( 'template-parts/stats' ); ?>
<?php get_template_part( 'template-parts/nosotros' ); ?>
<?php get_template_part( 'template-parts/regulatorio' ); ?>
<?php get_template_part( 'template-parts/operaciones' ); ?>
<?php get_template_part( 'template-parts/servicios' ); ?>
<?php get_template_part( 'template-parts/ositran' ); ?>
<?php get_template_part( 'template-parts/reclamos' ); ?>
<?php get_template_part( 'template-parts/contacto' ); ?>

<?php get_footer(); ?>
