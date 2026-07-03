<?php
/**
 * Servicios section — ported from src/components/Servicios.astro.
 * Carousel CSS lives in style.css; carousel JS lives in assets/js/carousels.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="servicios" style="padding:112px 36px;background:white;">
	<div style="max-width:1760px;margin:0 auto;">
		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">Operaciones Portuarias</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Servicios del Terminal</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				El terminal opera bajo el Reglamento de Operaciones (REOP) aprobado por APN, con cobertura 24 horas para la operación fluvial.
			</p>
		</div>

		<div data-reveal="" style="margin-bottom:32px;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
			<div style="display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:16px;">
				<h3 style="font-size:17.5px;font-weight:600;color:#1C2118;">Servicios Prestados</h3>
				<div class="svc-nav" style="display:flex;align-items:center;gap:8px;">
					<button type="button" class="svc-prev" aria-label="Anterior" style="width:36px;height:36px;border-radius:9px;border:1px solid #E2DDD5;background:white;display:flex;align-items:center;justify-content:center;cursor:pointer;color:#4A5240;transition:background 0.15s,border-color 0.15s,color 0.15s;">
						<svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="M9 2 4 7l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
					</button>
					<button type="button" class="svc-next" aria-label="Siguiente" style="width:36px;height:36px;border-radius:9px;border:1px solid #E2DDD5;background:white;display:flex;align-items:center;justify-content:center;cursor:pointer;color:#4A5240;transition:background 0.15s,border-color 0.15s,color 0.15s;">
						<svg width="13" height="13" viewBox="0 0 14 14" fill="none"><path d="m5 2 5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
					</button>
				</div>
			</div>

			<div class="svc-embla" style="overflow:hidden;">
				<div class="svc-embla__container" style="display:flex;gap:16px;align-items:stretch;">
					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(28,94,53,0.1);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2v9M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM3.5 9l-1.5 2a5.5 5.5 0 0 0 6 3M12.5 9l1.5 2a5.5 5.5 0 0 1-6 3" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Amarre y Desamarre de Naves</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:4px 10px;border-radius:5px;">Estándar</span>
							</div>
						</div>
					</div>

					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(28,94,53,0.1);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2 2 5v6l6 3 6-3V5l-6-3zM2 5l6 3 6-3M8 8v6" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Carga y Descarga de Mercancías</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:4px 10px;border-radius:5px;">Granel / Contenedores</span>
							</div>
						</div>
					</div>

					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(28,94,53,0.1);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 6.5 8 2l6 4.5V14H2V6.5z" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6 14v-4h4v4" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Almacenamiento de Carga</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:4px 10px;border-radius:5px;">Depósito temporal</span>
							</div>
						</div>
					</div>

					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(28,94,53,0.1);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 5.5h8M10 5.5 7.5 3M10 5.5 7.5 8" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M14 10.5H6M6 10.5 8.5 8M6 10.5 8.5 13" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Transbordo de Mercancías</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:4px 10px;border-radius:5px;">Fluvial</span>
							</div>
						</div>
					</div>

					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(28,94,53,0.1);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 14V6l6-3.5L14 6v8" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5 14V9h6v5" stroke="#1C5E35" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Uso de Infraestructura Portuaria</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:4px 10px;border-radius:5px;">Muelles / Explanadas</span>
							</div>
						</div>
					</div>

					<div class="svc-embla__slide">
						<div style="height:100%;background:white;border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
							<div style="width:38px;height:38px;border-radius:9px;background:rgba(196,148,26,0.12);display:flex;align-items:center;justify-content:center;">
								<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M8 2s4 4.2 4 7.2A4 4 0 0 1 4 9.2C4 6.2 8 2 8 2z" stroke="#C4941A" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</div>
							<h4 style="font-size:16.5px;font-weight:600;color:#1C2118;line-height:1.35;flex:1;">Servicios a la Nave (Agua, Combustible)</h4>
							<div style="padding-top:12px;border-top:1px solid #EDE9E2;">
								<span style="font-size:13px;font-weight:600;color:#C4941A;background:#FDF7E8;padding:4px 10px;border-radius:5px;">Por solicitud</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="svc-dots" style="display:flex;align-items:center;justify-content:center;gap:8px;margin-top:16px;"></div>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:stretch;" class="r-two">
			<div data-reveal="" style="background:#0A2618;border-radius:12px;padding:32px;color:white;display:flex;flex-direction:column;gap:16px;transition:opacity 0.65s ease 0.18s,transform 0.65s ease 0.18s;">
				<div style="display:flex;align-items:flex-start;justify-content:space-between;gap:12px;">
					<div>
						<div style="font-size:13px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#C4941A;margin-bottom:6px;">Documento Regulatorio</div>
						<h3 style="font-size:18px;font-weight:700;color:white;line-height:1.3;">Reglamento de Operaciones Portuarias</h3>
						<p style="font-size:14.5px;font-weight:500;color:rgba(255,255,255,0.4);margin-top:4px;">(REOP) — Aprobado por APN</p>
					</div>
					<span style="font-size:13px;font-weight:700;color:#B34A20;background:rgba(255,255,255,0.1);padding:3px 9px;border-radius:4px;white-space:nowrap;flex-shrink:0;">PDF</span>
				</div>
				<p style="font-size:16px;color:rgba(255,255,255,0.6);line-height:1.65;flex:1;">
					Regula los procedimientos operativos, estándares de seguridad y condiciones de uso del terminal portuario fluvial de Yurimaguas.
				</p>
				<div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px; display:none">
					<a href="#" style="display:inline-flex;align-items:center;gap:7px;font-size:15.5px;font-weight:700;color:white;background:rgba(28,94,53,0.7);border:1.5px solid rgba(28,94,53,0.9);padding:11px 20px;border-radius:8px;">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="white" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Descargar REOP
					</a>
					<span style="font-size:13.5px;color:rgba(255,255,255,0.35);">Vigente · APN 2026</span>
				</div>
			</div>

			<div data-reveal="" style="background:#F5F1EB;border-radius:12px;padding:32px;display:flex;flex-direction:column;gap:16px;transition:opacity 0.65s ease 0.26s,transform 0.65s ease 0.26s;">
				<h3 style="font-size:18px;font-weight:700;color:#1C2118;">Horarios Operativos</h3>
				<div style="display:flex;flex-direction:column;gap:10px;flex:1;">
					<div style="display:flex;justify-content:space-between;align-items:center;padding:14px 18px;background:white;border-radius:9px;">
						<span style="font-size:16px;color:#4A5240;font-weight:500;">Atención Operativa</span>
						<span style="font-size:15.5px;font-weight:700;color:#1C5E35;background:#EDF5F0;padding:4px 12px;border-radius:5px;">24 horas · Continua</span>
					</div>
					<div style="display:flex;justify-content:space-between;align-items:center;padding:14px 18px;background:white;border-radius:9px;">
						<span style="font-size:16px;color:#4A5240;font-weight:500;">Atención Documental</span>
						<div style="text-align:right;">
							<span style="display:block;font-size:15.5px;font-weight:600;color:#6B6558;">Lun–Vie 08:00 – 17:00 h</span>
							<span style="display:block;font-size:14px;color:#8F8A80;margin-top:2px;">Sábados 08:00 – 13:00 h</span>
						</div>
					</div>
					<p style="font-size:13px;color:#8F8A80;line-height:1.55;margin-top:4px;padding:0 4px;">
						* Excepto feriados. Fuera del horario administrativo, las solicitudes de servicio enviadas por correo se evaluarán según disponibilidad. La recepción de requerimientos programados o urgentes se mantiene a través de los canales oficiales.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
