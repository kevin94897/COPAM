<?php
/**
 * Regulatorio section — replaces the former "Zona Clientes" carousel.
 *
 * Tarifario and RETA (the two documents OSITRAN's RETA regulation requires
 * to be published "de forma destacada, individualizada y de acceso directo")
 * are rendered always-visible, above the tabs — not behind a tab click.
 * The remaining categories (Documentos Comerciales, Depósito Comercial,
 * Servicios Prestados) stay grouped into tabs. Tab switching is handled by
 * assets/js/carousels.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="regulatorio" style="padding:112px 36px;background:#F5F1EB;">
	<div style="max-width:1760px;margin:0 auto;">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">OSITRAN · Transparencia</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Regulatorio</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				Documentos vigentes exigidos por OSITRAN. Todos los archivos se encuentran publicados conforme a las obligaciones de transparencia de la concesión.
			</p>
		</div>

		<!-- Tarifas y precios vigentes: publicados de forma destacada, individualizada y de
		     acceso directo (sin clics de navegación), conforme lo exige el RETA de OSITRAN. -->
		<div data-reveal="" style="margin-bottom:40px;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
			<h3 style="font-size:20px;font-weight:700;color:#1C2118;margin-bottom:6px;">Tarifas y Precios Vigentes</h3>
			<p style="font-size:15.5px;color:#6B6558;line-height:1.6;max-width:760px;margin-bottom:18px;">Tarifario de Servicios Portuarios y Reglamento de Tarifas y Precios (RETA) actualmente en vigencia, de acceso directo conforme a la normativa de OSITRAN.</p>
			<div class="r-docs" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
				<?php copam_vigente_doc_card( 'Tarifario de Servicios Portuarios', 'En vigencia desde: 16 de junio de 2026', 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCfEzb0XobATK5pecfsKdO_ASO6Bimz6qri6LQ2Pa3w1iM?e=4Jt4mX' ); ?>
				<?php copam_vigente_doc_card( 'Reglamento de Tarifas y Precios — RETA COPAM', 'Versión 5.3 · Vigente desde: junio de 2026', 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQBVLArkDq6mQr-GYvJOxdIpAXDSdUNh-3lIndyFPPvnjK4?e=0Rk85z' ); ?>
			</div>
			<?php
			copam_historico_details(
				array(
					array(
						'title'  => 'Tarifario de Servicios Portuarios',
						'status' => 'Histórico, vigente hasta el 15.06.2026.',
						'href'   => 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCV272obm1-T6OgFOjfYjSiAcpliAVk8Q9dcmkF9Glorl8?e=dqUTTd',
					),
					array(
						'title'  => 'RETA COPAM V5.2',
						'status' => 'Histórico, sustituido por versión vigente.',
						'href'   => 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQD9zo9Dhsl2Q4USJH2UNVWbAeHi5kDfUvKpxsA8iEul6xg?e=3s9lhs',
					),
				)
			);
			?>
		</div>

		<div class="reg-tabs" data-reveal="" style="transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">

			<div class="reg-tabs__nav" role="tablist" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:28px;">
				<button type="button" class="reg-tabs__btn is-active" data-tab="comerciales" role="tab" aria-selected="true">Documentos Comerciales</button>
				<button type="button" class="reg-tabs__btn" data-tab="deposito" role="tab" aria-selected="false">Depósito Comercial</button>
				<!-- <button type="button" class="reg-tabs__btn" data-tab="servicios-prestados" role="tab" aria-selected="false">Servicios Prestados</button> -->
			</div>

			<div class="reg-tabs__panels">

				<div class="reg-tabs__panel is-active" data-panel="comerciales" role="tabpanel">
					<div class="r-docs" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
						<?php copam_vigente_doc_card( 'Política Comercial y Descuentos', 'Vigente desde: 07 de octubre de 2020 · Vigencia: 2 años', 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQD64KjgzT0VTb5K1LcOxaYXAT1QThsfapfrRhbkp_0VaEk?e=PGHM2t' ); ?>
					</div>
				</div>

				<div class="reg-tabs__panel" data-panel="deposito" role="tabpanel" hidden>
					<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:start;" class="r-two">

						<div style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:16px;box-shadow:0 1px 4px rgba(0,0,0,0.06);">
							<h4 style="font-size:16px;font-weight:600;color:#1C2118;margin-bottom:4px;">Documentos de Depósito Comercial</h4>
							<?php copam_vigente_doc_card( 'Tarifas del Depósito Temporal Fluvial', 'Vigente desde: 23 de octubre de 2025', 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDbjw-tHVK3TpukeIBbl9YgAR__bRjqh671E7_iyoHolxY?e=1Jasjb' ); ?>
							<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDHWAovEvS3TLTwk-BIUgVZAWHFQn6w-cTT_OzblJEhgFk?e=W6OkfT" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:10px;border-radius:7px;background:#F5F1EB;">
								<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
								<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Formulario Reclamaciones</span>
								<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
							</a>
							<p style="font-size:15.5px;color:#7A7468;line-height:1.6;margin-top:4px;">COPAM opera un depósito temporal autorizado por SUNAT para el ingreso, almacenamiento y control aduanero de mercancías.</p>
						</div>

						<div id="seguimiento" style="background:linear-gradient(155deg,#0A2618 0%,#1C5E35 100%);border-radius:16px;padding:44px 36px;display:flex;flex-direction:column;gap:24px;align-items:flex-start;position:relative;overflow:hidden;box-shadow:0 4px 20px rgba(10,38,24,0.3);">
							<div style="position:absolute;right:-40px;top:-40px;width:220px;height:220px;border-radius:50%;border:40px solid rgba(255,255,255,0.04);"></div>
							<div style="position:absolute;right:40px;bottom:-60px;width:160px;height:160px;border-radius:50%;border:30px solid rgba(255,255,255,0.04);"></div>
							<div style="position:relative;z-index:1;display:flex;flex-direction:column;gap:20px;">
								<div>
									<div style="font-size:13px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#C4941A;margin-bottom:10px;">Servicio en línea</div>
									<h3 style="font-size:30px;font-weight:700;color:white;line-height:1.1;letter-spacing:-0.02em;">Seguimiento<br>de Carga</h3>
								</div>
								<p style="font-size:16px;color:rgba(255,255,255,0.65);line-height:1.65;">Consulta el estado de tu carga en tiempo real: ubicación, notas de tarja, fechas de ingreso y despacho aduanero.</p>
								<a href="http://45.232.151.188:8081/consultacarga/" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:10px;background:#C4941A;color:white;font-size:17.5px;font-weight:700;padding:16px 32px;border-radius:10px;letter-spacing:0.01em;">
									<svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M1 4.5h16v11a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-11z" stroke="white" stroke-width="1.5"></path><path d="M1 4.5l8 5.5 8-5.5" stroke="white" stroke-width="1.5"></path><path d="M6 1.5h6" stroke="white" stroke-width="1.5" stroke-linecap="round"></path><circle cx="13" cy="4.5" r="2.5" fill="#FDD147"></circle></svg>
									Consultar Carga Ahora
								</a>
								<p style="font-size:14.5px;color:rgba(255,255,255,0.38);">Disponible 24 horas. Ingresa tu número de manifiesto, BL o precinto.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="reg-tabs__panel" data-panel="servicios-prestados" role="tabpanel" hidden>
					<div style="background:white;border-radius:12px;padding:48px;display:flex;flex-direction:column;gap:16px;align-items:center;text-align:center;box-shadow:0 1px 4px rgba(0,0,0,0.06);">
						<h3 style="font-size:20px;font-weight:600;color:#1C2118;">Servicios Prestados</h3>
						<p style="font-size:16.5px;color:#6B6558;line-height:1.65;max-width:560px;">Conoce el detalle completo de los servicios portuarios que ofrece COPAM en el Terminal de Yurimaguas.</p>
						<?php copam_button( '#servicios', 'Ver Servicios', 'primary' ); ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
