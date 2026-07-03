<?php
/**
 * Reclamos (INDECOPI info) section — ported from src/components/Reclamos.astro.
 * The vestigial dead <script> targeting #reclamos-form from the original file is
 * dropped here — that form actually lives in template-parts/contacto.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="reclamos" style="padding:112px 36px;background:white;">
	<div style="max-width:1760px;margin:0 auto;">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">INDECOPI · Atención al Usuario</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Atención al Usuario y Reclamos</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				COPAM S.A. garantiza el derecho de los usuarios a presentar reclamos conforme al Código de Protección al Consumidor y la normativa de INDECOPI.
			</p>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:stretch;" class="r-docs">

			<div data-reveal="" style="background:#FEF0EA;border:1.5px solid #F2C9B8;border-radius:14px;padding:32px;display:flex;flex-direction:column;gap:18px;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
				<div style="width:44px;height:44px;background:#B34A20;border-radius:10px;display:flex;align-items:center;justify-content:center;">
					<svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="3" y="2" width="16" height="18" rx="2" stroke="white" stroke-width="1.6"></rect><path d="M7 7h8M7 11h8M7 15h5" stroke="white" stroke-width="1.6" stroke-linecap="round"></path></svg>
				</div>
				<div>
					<h3 style="font-size:18px;font-weight:700;color:#1C2118;margin-bottom:8px;">Libro de Reclamaciones Virtual</h3>
					<p style="font-size:16.5px;color:#6B6558;line-height:1.65;">Registra tu reclamo o queja de manera virtual conforme al D.S. N° 011-2011-PCM y la Ley N° 29571 (Código de Protección al Consumidor).</p>
				</div>
				<a href="#formulario-libro" style="display:inline-flex;align-items:center;gap:9px;background:#B34A20;color:white;font-size:16.5px;font-weight:700;padding:14px 26px;border-radius:9px;width:fit-content;">
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="2" y="1.5" width="10" height="11" rx="1.5" stroke="white" stroke-width="1.3"></rect><path d="M4.5 4.5h5M4.5 7h5M4.5 9.5h3" stroke="white" stroke-width="1.3" stroke-linecap="round"></path></svg>
					Ingresar al Libro de Reclamaciones
				</a>
				<p style="font-size:14px;color:#9B6B55;">Respuesta en un plazo máximo de 30 días hábiles.</p>
			</div>

			<div style="display:flex;flex-direction:column;gap:16px;">

				<div data-reveal="" style="background:#F5F1EB;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:opacity 0.65s ease 0.18s,transform 0.65s ease 0.18s;">
					<h4 style="font-size:15.5px;font-weight:600;color:#1C2118;">Formatos Descargables</h4>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQBy7G5RCKBrQ5Isywxuwd5qAfLszdXF2JInhqlK64MVN3Y?e=r1RjVQ" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,0.05);">
						<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
						<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Flujograma de Procedimiento de Reclamo</span>
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
					</a>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDP82So7dHZT6hIc4MzpuaOAZW8u7uVD-PjGeyejhC2wVU?e=krdFGB" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,0.05);">
						<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
						<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Reglamento de Atención de Reclamos y Solución de Controversias de OSITRAN</span>
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
					</a>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDhnbt3CxZOQL8XTSGhB8NXAbZZBINXpHIv5kzxxMAwtRs?e=0f4lKZ" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,0.05);">
						<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
						<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Registro de Reclamaciones</span>
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
					</a>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDHWAovEvS3TLTwk-BIUgVZAWHFQn6w-cTT_OzblJEhgFk?e=W6OkfT" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,0.05);">
						<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
						<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Formulario Reclamaciones</span>
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
					</a>
				</div>

				<div data-reveal="" style="background:#F5F1EB;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:opacity 0.65s ease 0.26s,transform 0.65s ease 0.26s;">
					<h4 style="font-size:15.5px;font-weight:600;color:#1C2118;">Proceso de Atención</h4>
					<div style="display:flex;flex-direction:column;gap:0;">
						<div style="display:flex;gap:12px;align-items:flex-start;padding-bottom:16px;position:relative;">
							<div style="width:26px;height:26px;border-radius:50%;background:#1C5E35;color:white;font-size:14px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;z-index:1;">1</div>
							<div style="position:absolute;left:12px;top:26px;bottom:0;width:1px;background:#D4CEBC;z-index:0;"></div>
							<div style="padding-top:3px;">
								<div style="font-size:16px;font-weight:600;color:#1C2118;margin-bottom:2px;">Presenta tu reclamo</div>
								<div style="font-size:15.5px;color:#7A7468;line-height:1.5;">Vía libro virtual, formato físico o correo electrónico.</div>
							</div>
						</div>
						<div style="display:flex;gap:12px;align-items:flex-start;padding-bottom:16px;position:relative;">
							<div style="width:26px;height:26px;border-radius:50%;background:#1C5E35;color:white;font-size:14px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;position:relative;z-index:1;">2</div>
							<div style="position:absolute;left:12px;top:26px;bottom:0;width:1px;background:#D4CEBC;z-index:0;"></div>
							<div style="padding-top:3px;">
								<div style="font-size:16px;font-weight:600;color:#1C2118;margin-bottom:2px;">Evaluación interna</div>
								<div style="font-size:15.5px;color:#7A7468;line-height:1.5;">COPAM revisa el reclamo y recaba antecedentes.</div>
							</div>
						</div>
						<div style="display:flex;gap:12px;align-items:flex-start;">
							<div style="width:26px;height:26px;border-radius:50%;background:#1C5E35;color:white;font-size:14px;font-weight:700;display:flex;align-items:center;justify-content:center;flex-shrink:0;">3</div>
							<div style="padding-top:3px;">
								<div style="font-size:16px;font-weight:600;color:#1C2118;margin-bottom:2px;">Respuesta formal</div>
								<div style="font-size:15.5px;color:#7A7468;line-height:1.5;">Respuesta motivada en un máximo de 30 días hábiles.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
