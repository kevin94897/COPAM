<?php
/**
 * Site footer — ported from src/components/Footer.astro.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
	</main>

	<footer style="background:#071810;border-top:1px solid rgba(255,255,255,0.06);padding:48px 36px 28px;">
	<div class="container" style="display:flex;flex-direction:column;gap:36px;">
		<div style="display:grid;grid-template-columns:1.8fr 1fr 1fr 1fr;gap:40px;" class="r-footer">

			<div style="display:flex;flex-direction:column;gap:16px;">
				<div style="display:flex;align-items:center;gap:10px;">
					<?php copam_render_logo( 36 ); ?>
				</div>
				<p style="font-size:15.5px;color:rgba(255,255,255,0.38);line-height:1.7;max-width:240px;">
					Concesionaria del terminal portuario fluvial de Yurimaguas, bajo regulación del Estado peruano.
				</p>
				<div style="display:flex;flex-direction:column;gap:5px;">
					<span style="font-size:14.5px;color:rgba(255,255,255,0.35);">Via de Evitamiento Km 0, Yurimaguas, Loreto</span>
					<span style="font-size:14.5px;color:rgba(255,255,255,0.35);">servicioclientes@copam.com.pe</span>
				</div>
			</div>

			<div style="display:flex;flex-direction:column;gap:12px;">
				<span style="font-size:13.5px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.3);">Regulatorio</span>
				<a href="#regulatorio" style="font-size:16px;color:rgba(255,255,255,0.5);">Tarifario OSITRAN</a>
				<a href="#regulatorio" style="font-size:16px;color:rgba(255,255,255,0.5);">Documentos Comerciales</a>
				<a href="#operaciones" style="font-size:16px;color:rgba(255,255,255,0.5);">Reglamento de Operaciones</a>
				<a href="#ositran" style="font-size:16px;color:rgba(255,255,255,0.5);">Transparencia OSITRAN</a>
			</div>

			<div style="display:flex;flex-direction:column;gap:12px;">
				<span style="font-size:13.5px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.3);">Servicios</span>
				<a href="#servicios" style="font-size:16px;color:rgba(255,255,255,0.5);">Operaciones Portuarias</a>
				<a href="#servicios" style="font-size:16px;color:rgba(255,255,255,0.5);">REOP</a>
				<a href="#regulatorio" style="font-size:16px;color:rgba(255,255,255,0.5);">Depósito Temporal</a>
				<a href="#seguimiento" style="font-size:16px;color:rgba(255,255,255,0.5);">Seguimiento de Carga</a>
			</div>

			<div style="display:flex;flex-direction:column;gap:12px;">
				<span style="font-size:13.5px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:rgba(255,255,255,0.3);">Usuario</span>
				<a href="#formulario-libro" style="font-size:16px;color:rgba(255,255,255,0.5);">Libro de Reclamaciones</a>
				<a href="#reclamos" style="font-size:16px;color:rgba(255,255,255,0.5);">Formatos de Reclamo</a>
				<a href="#contacto" style="font-size:16px;color:rgba(255,255,255,0.5);">Contacto</a>
				<a href="https://www.gob.pe/ositran" target="_blank" rel="noopener noreferrer" style="font-size:16px;color:rgba(255,255,255,0.5);">Portal OSITRAN ↗</a>
			</div>
		</div>

		<div style="border-top:1px solid rgba(255,255,255,0.06);padding-top:22px;display:flex;flex-direction:column;gap:14px;">
			<div style="display:flex;align-items:center;gap:20px;flex-wrap:wrap;">
				<a href="<?php echo esc_url( copam_legal_page_url( 'template-politica-privacidad.php' ) ); ?>" style="font-size:14px;color:rgba(255,255,255,0.4);">Política de Privacidad</a>
				<span style="font-size:14px;color:rgba(255,255,255,0.15);">·</span>
				<a href="<?php echo esc_url( copam_legal_page_url( 'template-politica-cookies.php' ) ); ?>" style="font-size:14px;color:rgba(255,255,255,0.4);">Política de Cookies</a>
				<span style="font-size:14px;color:rgba(255,255,255,0.15);">·</span>
				<a href="#" style="font-size:14px;color:rgba(255,255,255,0.4);display:flex;align-items:center;gap:5px;">
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1a5 5 0 1 0 0 10A5 5 0 0 0 6 1zm0 2v4m0 1.5v.5" stroke="rgba(255,255,255,0.4)" stroke-width="1.3" stroke-linecap="round"></path></svg>
					Canal de Integridad y Denuncias
				</a>
			</div>
			
		</div>
	</div>
</footer>

<?php get_template_part( 'template-parts/cookie-banner' ); ?>

<?php wp_footer(); ?>
</body>
</html>
