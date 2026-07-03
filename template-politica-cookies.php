<?php
/**
 * Template Name: Política de Cookies
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<section style="padding:150px 36px 56px;background:#0A2618;">
	<div style="max-width:900px;margin:0 auto;display:flex;flex-direction:column;gap:10px;">
		<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#C4941A;">Legal</span>
		<h1 style="font-size:44px;font-weight:700;letter-spacing:-0.028em;color:white;line-height:1.1;">Política de Cookies</h1>
		<p style="font-size:16px;color:rgba(255,255,255,0.5);">Última actualización: 3 de julio de 2026</p>
	</div>
</section>

<section style="padding:64px 36px 112px;background:#F5F1EB;">
	<div style="max-width:900px;margin:0 auto;display:flex;flex-direction:column;gap:40px;">

		<div style="display:flex;flex-direction:column;gap:12px;">
			<p style="font-size:17px;color:#4A5240;line-height:1.7;">
				Este sitio, operado por Concesionaria Puerto Amazonas S.A. (COPAM), utiliza una cantidad mínima de cookies y almacenamiento local, estrictamente necesarios para su funcionamiento. A continuación explicamos qué usamos y por qué.
			</p>
		</div>

		<div style="display:flex;flex-direction:column;gap:14px;">
			<h2 style="font-size:26px;font-weight:700;color:#1C2118;">1. ¿Qué son las cookies?</h2>
			<p style="font-size:16.5px;color:#4A5240;line-height:1.7;">
				Las cookies son pequeños archivos que un sitio web guarda en su navegador para recordar información entre visitas. Algunas funciones equivalentes, como el almacenamiento local del navegador (localStorage), cumplen un propósito similar sin enviarse a nuestro servidor en cada solicitud.
			</p>
		</div>

		<div style="display:flex;flex-direction:column;gap:14px;">
			<h2 style="font-size:26px;font-weight:700;color:#1C2118;">2. Qué usamos en este sitio</h2>
			<ul style="margin:0;padding-left:20px;display:flex;flex-direction:column;gap:8px;">
				<li style="font-size:16.5px;color:#4A5240;line-height:1.6;"><strong style="color:#1C2118;">Preferencia de cookies:</strong> guardamos su elección del banner de cookies (aceptar o solo esenciales) en el almacenamiento local de su navegador, para no volver a mostrarle el aviso en cada visita.</li>
				<li style="font-size:16.5px;color:#4A5240;line-height:1.6;"><strong style="color:#1C2118;">Cookies técnicas de WordPress:</strong> el sistema de administración del sitio puede establecer cookies estrictamente necesarias para su funcionamiento (por ejemplo, de sesión), solo relevantes para usuarios administradores.</li>
				<li style="font-size:16.5px;color:#4A5240;line-height:1.6;"><strong style="color:#1C2118;">Fuentes tipográficas externas:</strong> este sitio carga la tipografía DM Sans desde los servidores de Google Fonts, lo que implica una solicitud a un servidor externo de Google al visitar la página.</li>
			</ul>
			<p style="font-size:16.5px;color:#4A5240;line-height:1.7;">
				Actualmente no utilizamos cookies de publicidad ni de analítica o seguimiento de terceros.
			</p>
		</div>

		<div style="display:flex;flex-direction:column;gap:14px;">
			<h2 style="font-size:26px;font-weight:700;color:#1C2118;">3. Cómo gestionar su preferencia</h2>
			<p style="font-size:16.5px;color:#4A5240;line-height:1.7;">
				Puede cambiar su elección en cualquier momento borrando los datos de navegación/almacenamiento local de este sitio desde la configuración de su navegador; el aviso de cookies volverá a mostrarse en su próxima visita. También puede bloquear cookies directamente desde la configuración de privacidad de su navegador.
			</p>
		</div>

		<div style="display:flex;flex-direction:column;gap:14px;">
			<h2 style="font-size:26px;font-weight:700;color:#1C2118;">4. Cambios a esta política</h2>
			<p style="font-size:16.5px;color:#4A5240;line-height:1.7;">
				Si en el futuro incorporamos herramientas de analítica o cookies adicionales, actualizaremos este documento y la fecha indicada al inicio.
			</p>
		</div>

		<div style="display:flex;flex-direction:column;gap:14px;">
			<h2 style="font-size:26px;font-weight:700;color:#1C2118;">5. Contacto</h2>
			<p style="font-size:16.5px;color:#4A5240;line-height:1.7;">
				Para consultas sobre esta política, escríbanos a <a href="mailto:servicioclientes@copam.com.pe" style="color:#1C5E35;font-weight:600;">servicioclientes@copam.com.pe</a>. Consulte también nuestra <a href="<?php echo esc_url( copam_legal_page_url( 'template-politica-privacidad.php' ) ); ?>" style="color:#1C5E35;font-weight:600;">Política de Privacidad</a>.
			</p>
		</div>

	</div>
</section>

<?php get_footer(); ?>
