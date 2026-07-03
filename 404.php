<?php
/**
 * 404 template. WordPress already sends the HTTP 404 status header once
 * is_404() is true; this file only replaces the index.php fallback (which
 * would otherwise render the full homepage) with actual "not found" content.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section style="padding:180px 36px 140px;background:#F5F1EB;text-align:center;">
	<div style="max-width:640px;margin:0 auto;display:flex;flex-direction:column;align-items:center;gap:16px;">
		<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">Error 404</span>
		<h1 style="font-size:36px;font-weight:700;letter-spacing:-0.02em;color:#1C2118;line-height:1.15;">Página no encontrada</h1>
		<p style="font-size:17px;color:#6B6558;line-height:1.65;">La página que buscas no existe o fue movida. Puedes volver al inicio o revisar el Libro de Reclamaciones y la sección de contacto.</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:inline-flex;align-items:center;gap:8px;background:#B34A20;color:white;font-size:16px;font-weight:700;padding:14px 28px;border-radius:9px;margin-top:8px;">
			Volver al inicio
		</a>
	</div>
</section>

<?php get_footer(); ?>
