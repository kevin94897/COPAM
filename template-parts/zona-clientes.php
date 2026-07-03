<?php
/**
 * Zona Clientes section — ported from src/components/ZonaClientes.astro.
 * Carousel CSS lives in style.css; carousel JS lives in assets/js/carousels.js.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="zona-clientes" style="padding:112px 36px;background:#F5F1EB;">
	<div style="max-width:1760px;margin:0 auto;">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<div style="display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap;">
				<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">OSITRAN · Transparencia</span>
				<div class="reg-nav" style="display:flex;align-items:center;gap:8px;">
					<button type="button" class="reg-prev" aria-label="Anterior" style="width:38px;height:38px;border-radius:9px;border:1px solid #E2DDD5;background:white;display:flex;align-items:center;justify-content:center;cursor:pointer;color:#4A5240;transition:background 0.15s,border-color 0.15s;">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 2 4 7l5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
					</button>
					<button type="button" class="reg-next" aria-label="Siguiente" style="width:38px;height:38px;border-radius:9px;border:1px solid #E2DDD5;background:white;display:flex;align-items:center;justify-content:center;cursor:pointer;color:#4A5240;transition:background 0.15s,border-color 0.15s;">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="m5 2 5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
					</button>
				</div>
			</div>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Zona Clientes</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				Documentos vigentes exigidos por OSITRAN. Todos los archivos se encuentran publicados conforme a las obligaciones de transparencia de la concesión.
			</p>
		</div>

		<div class="reg-embla" data-reveal="" style="overflow:hidden;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
		<div class="reg-embla__container" style="display:flex;gap:20px;">

			<div class="reg-embla__slide" style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
				<div style="display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#B34A20;background:#FEF0EA;padding:3px 8px;border-radius:4px;">PDF</span>
					<span style="font-size:13.5px;color:#9B9285;font-weight:500;">OSITRAN</span>
				</div>
				<div>
					<h3 style="font-size:16px;font-weight:600;color:#1C2118;line-height:1.4;margin-bottom:8px;">Tarifario de Servicios Portuarios</h3>
					<p style="font-size:15.5px;color:#7A7468;line-height:1.6;">Lista de precios máximos de los servicios prestados en el terminal. Vigente según resolución OSITRAN.</p>
				</div>
				<div style="border-top:1px solid #EDE9E2;padding-top:14px;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:14px;color:#9B9285;">Vigente 16.06.2026</span>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCfEzb0XobATK5pecfsKdO_ASO6Bimz6qri6LQ2Pa3w1iM?e=4Jt4mX" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:5px;font-size:15.5px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:6px 12px;border-radius:6px;">
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Descargar
					</a>
				</div>
			</div>

			<div class="reg-embla__slide" style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
				<div style="display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#B34A20;background:#FEF0EA;padding:3px 8px;border-radius:4px;">PDF</span>
					<span style="font-size:13.5px;color:#9B9285;font-weight:500;">OSITRAN</span>
				</div>
				<div>
					<h3 style="font-size:16px;font-weight:600;color:#1C2118;line-height:1.4;margin-bottom:8px;">Reglamento de Tarifas (RETA)</h3>
					<p style="font-size:15.5px;color:#7A7468;line-height:1.6;">Marco normativo que regula la estructura, aplicación y revisión de las tarifas de servicios portuarios.</p>
				</div>
				<div style="border-top:1px solid #EDE9E2;padding-top:14px;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:14px;color:#9B9285;">Versión 5.3 · 2025</span>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQBVLArkDq6mQr-GYvJOxdIpAXDSdUNh-3lIndyFPPvnjK4?e=0Rk85z" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:5px;font-size:15.5px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:6px 12px;border-radius:6px;">
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Descargar
					</a>
				</div>
			</div>

			<div class="reg-embla__slide" style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
				<div style="display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#B34A20;background:#FEF0EA;padding:3px 8px;border-radius:4px;">PDF</span>
					<span style="font-size:13.5px;color:#9B9285;font-weight:500;">OSITRAN</span>
				</div>
				<div>
					<h3 style="font-size:16px;font-weight:600;color:#1C2118;line-height:1.4;margin-bottom:8px;">Reglamento de Operaciones del Terminal</h3>
					<p style="font-size:15.5px;color:#7A7468;line-height:1.6;">Reglamento de Operaciones del Terminal Portuario de Yurimaguas No Reversible (TPY-NR), aprobado por OSITRAN.</p>
				</div>
				<div style="border-top:1px solid #EDE9E2;padding-top:14px;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:14px;color:#9B9285;">Vigente 11.06.2026</span>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQArZpMul116S7BfvN3KKACgAdgP46RNi1zSb6-FtFP0Vjs?e=IRhQJS" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:5px;font-size:15.5px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:6px 12px;border-radius:6px;">
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Descargar
					</a>
				</div>
			</div>

			<div class="reg-embla__slide" style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:14px;border:1px solid #E5E0D3;">
				<div style="display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#B34A20;background:#FEF0EA;padding:3px 8px;border-radius:4px;">PDF</span>
					<span style="font-size:13.5px;color:#9B9285;font-weight:500;">OSITRAN</span>
				</div>
				<div>
					<h3 style="font-size:16px;font-weight:600;color:#1C2118;line-height:1.4;margin-bottom:8px;">Reglamento Marco de Acceso (REMA)</h3>
					<p style="font-size:15.5px;color:#7A7468;line-height:1.6;">Reglamento Marco de Acceso a la Infraestructura de Transporte de Uso Público, Res. N° 014-2003-CD-OSITRAN.</p>
				</div>
				<div style="border-top:1px solid #EDE9E2;padding-top:14px;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:14px;color:#9B9285;">OSITRAN</span>
					<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCGlXJ2LTNTSofMzSFE8aUeAXNgl8YgclIWUp6jZXxZoxg?e=0UwIXa" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:5px;font-size:15.5px;font-weight:600;color:#1C5E35;background:#EDF5F0;padding:6px 12px;border-radius:6px;">
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Descargar
					</a>
				</div>
			</div>

			<div class="reg-embla__slide" style="background:linear-gradient(135deg,#0A2618 0%,#1C5E35 100%);border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:14px;border:1px solid rgba(255,255,255,0.12);">
				<div>
					<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#C4941A;background:rgba(196,148,26,0.15);padding:3px 8px;border-radius:4px;">ENLACE EXTERNO</span>
				</div>
				<div>
					<h3 style="font-size:16px;font-weight:600;color:white;line-height:1.4;margin-bottom:8px;">Portal de Transparencia OSITRAN</h3>
					<p style="font-size:15.5px;color:rgba(255,255,255,0.6);line-height:1.6;">Accede al portal oficial del regulador para consultar expedientes, resoluciones y supervisiones del terminal.</p>
				</div>
				<a href="https://www.gob.pe/ositran" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:6px;font-size:15.5px;font-weight:600;color:white;background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.2);padding:8px 14px;border-radius:6px;margin-top:auto;">
					Ir al portal OSITRAN
					<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M2 9L9 2M9 2H4M9 2v5" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
				</a>
			</div>

		</div>
		</div>

		<div class="reg-dots" style="display:flex;align-items:center;justify-content:center;gap:8px;margin-top:28px;"></div>
	</div>
</section>
