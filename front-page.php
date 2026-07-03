<?php
/**
 * Homepage — assembles all sections in the same order as src/pages/index.astro.
 * WP uses this template automatically for the site's front page as soon as
 * the theme is active (no Settings > Reading configuration required).
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
