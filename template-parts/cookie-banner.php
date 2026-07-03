<?php
/**
 * Cookie consent banner — ported from src/components/CookieBanner.astro.
 * Behavior (show/accept/reject via localStorage) lives in assets/js/main.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div id="cookie-banner" style="display:none;position:fixed;bottom:0;left:0;right:0;z-index:500;background:#1C2118;border-top:2px solid #C4941A;padding:18px 36px;">
	<div class="container" style="display:flex;align-items:center;gap:24px;flex-wrap:wrap;">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" style="flex-shrink:0;"><circle cx="10" cy="10" r="8" stroke="#C4941A" stroke-width="1.4"></circle><circle cx="7" cy="8" r="1.2" fill="#C4941A"></circle><circle cx="13" cy="7" r="1" fill="#C4941A"></circle><circle cx="11" cy="13" r="1.2" fill="#C4941A"></circle><circle cx="7" cy="13" r="0.8" fill="#C4941A"></circle></svg>
		<p style="font-size:15.5px;color:rgba(255,255,255,0.7);line-height:1.55;flex:1;min-width:200px;">Este sitio utiliza cookies necesarias para su funcionamiento. Consulte nuestra <a href="<?php echo esc_url( copam_legal_page_url( 'template-politica-cookies.php' ) ); ?>" style="color:#C4941A;text-decoration:underline;">Política de Cookies</a> y <a href="<?php echo esc_url( copam_legal_page_url( 'template-politica-privacidad.php' ) ); ?>" style="color:#C4941A;text-decoration:underline;">Política de Privacidad</a>.</p>
		<div style="display:flex;gap:10px;flex-shrink:0;">
			<button id="cookie-reject" style="font-size:15.5px;font-weight:600;color:rgba(255,255,255,0.55);background:transparent;border:1px solid rgba(255,255,255,0.2);padding:8px 18px;border-radius:7px;cursor:pointer;">Solo esenciales</button>
			<button id="cookie-accept" style="font-size:15.5px;font-weight:700;color:white;background:#C4941A;border:none;padding:8px 20px;border-radius:7px;cursor:pointer;">Aceptar</button>
		</div>
	</div>
</div>
