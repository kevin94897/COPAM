<?php
/**
 * Contacto section — ported from src/components/Contacto.astro.
 * The Libro de Reclamaciones form now posts to admin-post.php and is
 * handled by inc/reclamos-mail.php (wp_mail to servicioclientes@copam.com.pe).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="contacto" style="padding:112px 36px 100px;background:#0A2618;">
	<div style="max-width:780px;margin:0 auto;">
		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:36px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#C4941A;">Contacto</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:white;line-height:1.05;">Escríbenos</h2>
			<p style="font-size:17px;color:rgba(255,255,255,0.55);line-height:1.65;max-width:900px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				Para consultas, trámites o reclamos, complete el Libro de Reclamaciones Virtual y nos comunicaremos a la brevedad conforme a los plazos establecidos por INDECOPI.
			</p>
		</div>

		<div data-reveal="" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:22px 24px;margin-bottom:36px;display:grid;grid-template-columns:repeat(2,1fr);gap:20px 16px;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;" class="r-form-grid">
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">Correo de Atención</span>
				<span style="font-size:15.5px;font-weight:600;line-height:1.4;"><a href="mailto:servicioclientes@copam.com.pe" style="color:white;">servicioclientes@copam.com.pe</a></span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Atención al Usuario</span>
			</div>
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">Razón Social</span>
				<span style="font-size:15.5px;font-weight:600;color:white;line-height:1.4;">Concesionaria Puerto Amazonas S.A.</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">COPAM S.A.</span>
			</div>
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">RUC</span>
				<span style="font-size:15.5px;font-weight:600;color:white;">20543480291</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">SUNAT · Contribuyente activo</span>
			</div>
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">Domicilio Fiscal</span>
				<span style="font-size:15.5px;font-weight:600;color:white;line-height:1.4;">Via de Evitamiento Km 0</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Caserío Santa Rosa (Río Huallaga), Yurimaguas, Loreto – Perú</span>
			</div>
		</div>

		<div data-reveal="" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:12px;padding:22px 24px;margin-bottom:36px;display:grid;grid-template-columns:1fr 1fr;gap:16px;transition:opacity 0.65s ease 0.12s,transform 0.65s ease 0.12s;" class="r-form-grid">
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">Terminal Portuario de Yurimaguas NR</span>
				<span style="font-size:15.5px;font-weight:600;color:white;line-height:1.4;">Via de Evitamiento Km 0, Caserío Santa Rosa (Río Huallaga), Yurimaguas</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Telf. (01) 500-0450</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Horario administrativo: Lun. a Vie. 8:00–17:00, Sáb. 8:00–13:00</span>
			</div>
			<div style="display:flex;flex-direction:column;gap:3px;">
				<span style="font-size:12.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:rgba(255,255,255,0.35);">Oficina Lima</span>
				<span style="font-size:15.5px;font-weight:600;color:white;line-height:1.4;">Av. Javier Prado Este Nro. 4135 Int. 701</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Santiago de Surco, Lima – Perú</span>
				<span style="font-size:14.5px;color:rgba(255,255,255,0.5);">Telf. (+511) 500-2670</span>
			</div>
		</div>

		<!-- Formulario Libro de Reclamaciones (Multipaso) -->
		<div id="formulario-libro" data-reveal="" style="background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:16px;overflow:hidden;scroll-margin-top:100px;transition:opacity 0.65s ease 0.15s,transform 0.65s ease 0.15s;">

			<div style="padding:24px 32px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;border-bottom:1px solid rgba(255,255,255,0.1);">
				<div>
					<h3 style="font-size:22px;font-weight:700;color:white;margin-bottom:4px;">Libro de Reclamaciones Virtual</h3>
					<p style="font-size:15px;color:rgba(255,255,255,0.5);">Concesionaria Puerto Amazonas S.A.</p>
				</div>
			</div>

			<div style="padding:32px 32px 0;">
				<div id="reclamo-banner-ok" class="reclamo-banner reclamo-banner--ok">Su reclamo fue registrado correctamente. Nos comunicaremos a la brevedad conforme a los plazos establecidos por INDECOPI.</div>
				<div id="reclamo-banner-error" class="reclamo-banner reclamo-banner--error">No se pudo registrar su reclamo. Por favor intente nuevamente o escríbanos a servicioclientes@copam.com.pe.</div>
			</div>

			<form id="reclamos-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" novalidate style="padding:32px;position:relative;min-height:350px;">
				<input type="hidden" name="action" value="copam_reclamo_submit" />
				<?php wp_nonce_field( 'copam_reclamo_submit', 'copam_reclamo_nonce' ); ?>
				<input type="text" name="website" class="copam-honeypot-field" tabindex="-1" autocomplete="off" aria-hidden="true" />

				<div class="form-step active" data-step="1" style="display:flex;flex-direction:column;gap:24px;">
					<h4 style="font-size:20px;font-weight:700;color:white;margin-bottom:8px;">1. Identificación del Consumidor Reclamante</h4>

					<div style="display:flex;flex-direction:column;gap:16px;">
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Nombre Completo</label>
							<input type="text" name="nombre_completo" placeholder="Ej. Juan Pérez García" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'" />
						</div>
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Domicilio</label>
							<input type="text" name="domicilio" placeholder="Dirección completa" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'" />
						</div>
						<div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));gap:16px;">
							<div>
								<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Documento de Identidad (DNI/CE/RUC)</label>
								<input type="text" name="documento_identidad" placeholder="Número de documento" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'" />
							</div>
							<div>
								<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Teléfono / E-mail</label>
								<input type="text" name="contacto" placeholder="Contacto directo" required style="width:100%;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'" />
							</div>
						</div>
					</div>
				</div>

				<div class="form-step" data-step="2" style="display:none;flex-direction:column;gap:24px;">
					<h4 style="font-size:20px;font-weight:700;color:white;margin-bottom:8px;">2. Identificación del Bien Contratado</h4>

					<div style="display:flex;flex-direction:column;gap:16px;">
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:10px;">Tipo de Bien</label>
							<div style="display:flex;gap:24px;">
								<label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:15.5px;color:white;">
									<input type="radio" name="tipo_bien" value="producto" style="width:18px;height:18px;accent-color:#B34A20;" />
									Producto
								</label>
								<label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:15.5px;color:white;">
									<input type="radio" name="tipo_bien" value="servicio" checked style="width:18px;height:18px;accent-color:#B34A20;" />
									Servicio
								</label>
							</div>
						</div>
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Descripción del Producto / Servicio</label>
							<textarea name="descripcion_bien" placeholder="Brinde detalles del bien contratado..." required style="width:100%;min-height:120px;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;resize:vertical;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'"></textarea>
						</div>
					</div>
				</div>

				<div class="form-step" data-step="3" style="display:none;flex-direction:column;gap:24px;">
					<h4 style="font-size:20px;font-weight:700;color:white;margin-bottom:8px;">3. Detalle de la Reclamación</h4>

					<div style="display:flex;flex-direction:column;gap:16px;">
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:10px;">Tipo de Reclamación</label>
							<div style="display:flex;gap:24px;">
								<label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:15.5px;color:white;font-weight:600;">
									<input type="radio" name="tipo_reclamo" value="reclamo" checked style="width:18px;height:18px;accent-color:#B34A20;" />
									Reclamo*
								</label>
								<label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:15.5px;color:white;font-weight:600;">
									<input type="radio" name="tipo_reclamo" value="queja" style="width:18px;height:18px;accent-color:#B34A20;" />
									Queja**
								</label>
							</div>
						</div>
						<div>
							<label style="display:block;font-size:14px;font-weight:600;color:rgba(255,255,255,0.5);margin-bottom:6px;">Detalle de lo ocurrido</label>
							<textarea name="detalle_reclamo" placeholder="Explique detalladamente el motivo de su reclamación..." required style="width:100%;min-height:150px;padding:12px 16px;background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);border-radius:8px;font-size:15.5px;color:white;outline:none;resize:vertical;transition:border-color 0.2s;box-sizing:border-box;" onfocus="this.style.borderColor='#C4941A'" onblur="this.style.borderColor='rgba(255,255,255,0.12)'"></textarea>
						</div>

						<div style="background:rgba(255,255,255,0.05);padding:16px;border-radius:8px;border:1px solid rgba(255,255,255,0.12);margin-top:8px;">
							<label style="display:flex;align-items:flex-start;gap:12px;cursor:pointer;">
								<input type="checkbox" name="declaracion_jurada" required style="width:20px;height:20px;margin-top:2px;accent-color:#B34A20;" />
								<span style="font-size:14.5px;color:rgba(255,255,255,0.6);line-height:1.5;">
									<strong style="color:white;">Declaración Jurada:</strong> Declaro bajo juramento que los datos proporcionados en este formulario son verdaderos y me someto a las disposiciones establecidas en la Ley N° 29571 (Código de Protección al Consumidor). Esta aceptación tiene carácter de <strong style="color:white;">Firma Digital del Consumidor</strong>.
								</span>
							</label>
						</div>
					</div>
				</div>

				<div style="display:flex;align-items:center;justify-content:space-between;margin-top:32px;padding-top:24px;border-top:1px solid rgba(255,255,255,0.1);">
					<button type="button" id="btn-prev" style="display:none;align-items:center;gap:8px;background:transparent;color:rgba(255,255,255,0.6);font-size:15.5px;font-weight:600;padding:10px 20px;border:1.5px solid rgba(255,255,255,0.2);border-radius:8px;cursor:pointer;transition:background 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.08)'" onmouseout="this.style.background='transparent'">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M8.5 2.5L4 7l4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						Atrás
					</button>

					<div style="flex:1;"></div>

					<button type="button" id="btn-next" style="display:flex;align-items:center;gap:8px;background:#B34A20;color:white;font-size:15.5px;font-weight:600;padding:12px 28px;border:none;border-radius:8px;cursor:pointer;transition:background 0.2s;" onmouseover="this.style.background='#9B3D18'" onmouseout="this.style.background='#B34A20'">
						Siguiente
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M5.5 2.5L10 7l-4.5 4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path></svg>
					</button>

					<button type="submit" id="btn-submit" style="display:none;align-items:center;gap:8px;background:#B34A20;color:white;font-size:15.5px;font-weight:600;padding:12px 28px;border:none;border-radius:8px;cursor:pointer;transition:background 0.2s;" onmouseover="this.style.background='#9B3D18'" onmouseout="this.style.background='#B34A20'">
						Enviar Reclamación
					</button>
				</div>
			</form>

			<div style="background:rgba(0,0,0,0.15);padding:16px 32px;border-top:1px solid rgba(255,255,255,0.1);font-size:12.5px;color:rgba(255,255,255,0.4);line-height:1.6;">
				<div style="display:flex;flex-direction:column;gap:6px;margin-bottom:12px;">
					<span><strong style="color:rgba(255,255,255,0.6);">*RECLAMO:</strong> Disconformidad relacionada a los productos o servicios.</span>
					<span><strong style="color:rgba(255,255,255,0.6);">**QUEJA:</strong> Disconformidad no relacionada a los productos o servicios; o, malestar o descontento respecto a la atención al público.</span>
				</div>
				<div style="font-style:italic;color:#C4941A;font-weight:500;">
					Sustento Legal: Resolución de Consejo Directivo N° 019-2011-CD-OSITRAN
				</div>
				<div style="font-style:italic;color:#C4941A;font-weight:500;">
					* Sin perjuicio de ello, el TPY-NR recibirá vía correo electrónico las Peticiones de Servicio y Solicitudes de Servicio fuera de dicho horario, evaluando y definiendo lo solicitado según la disposición de recursos en el TPY-NR.
				</div>
			</div>
		</div>
	</div>
</section>
