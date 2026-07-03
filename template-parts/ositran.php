<?php
/**
 * OSITRAN section — replaces the former "SUNAT" section. The SUNAT-specific
 * bonded-warehouse content (Depósito Temporal, Seguimiento de Carga) moved to
 * template-parts/regulatorio.php under the "Depósito Comercial" tab; this
 * section is now the regulator-facing OSITRAN portal + normativa.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="ositran" style="padding:112px 36px;background:#F5F1EB;">
	<div style="max-width:1760px;margin:0 auto;">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">OSITRAN</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Portal y Normativa OSITRAN</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				COPAM opera bajo la supervisión del Organismo Supervisor de la Inversión en Infraestructura de Transporte de Uso Público (OSITRAN).
			</p>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;align-items:start;" class="r-two">

			<div data-reveal="" style="background:linear-gradient(135deg,#0A2618 0%,#1C5E35 100%);border-radius:16px;padding:32px;display:flex;flex-direction:column;gap:16px;box-shadow:0 4px 20px rgba(10,38,24,0.3);transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
				<span style="font-size:13px;font-weight:700;letter-spacing:0.06em;color:#C4941A;background:rgba(196,148,26,0.15);padding:3px 8px;border-radius:4px;width:fit-content;">ENLACE EXTERNO</span>
				<div>
					<h3 style="font-size:20px;font-weight:600;color:white;line-height:1.4;margin-bottom:8px;">Portal de Transparencia OSITRAN</h3>
					<p style="font-size:16px;color:rgba(255,255,255,0.65);line-height:1.65;">Accede al portal oficial del regulador para consultar expedientes, resoluciones y supervisiones del terminal.</p>
				</div>
				<a href="https://www.gob.pe/ositran" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:8px;font-size:16px;font-weight:600;color:white;background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.2);padding:12px 20px;border-radius:8px;width:fit-content;margin-top:auto;">
					Ir al portal OSITRAN
					<svg width="12" height="12" viewBox="0 0 11 11" fill="none"><path d="M2 9L9 2M9 2H4M9 2v5" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
				</a>
			</div>

			<div data-reveal="" style="background:white;border-radius:12px;padding:24px;display:flex;flex-direction:column;gap:12px;box-shadow:0 1px 4px rgba(0,0,0,0.06);transition:opacity 0.65s ease 0.18s,transform 0.65s ease 0.18s;">
				<h4 style="font-size:16px;font-weight:600;color:#1C2118;margin-bottom:4px;">Normativa OSITRAN</h4>
				<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCGlXJ2LTNTSofMzSFE8aUeAXNgl8YgclIWUp6jZXxZoxg?e=0UwIXa" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:10px;border-radius:7px;background:#F5F1EB;">
					<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
					<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Reglamento Marco de Acceso a la Infraestructura de Transporte de Uso Público</span>
					<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				</a>
				<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDP82So7dHZT6hIc4MzpuaOAZW8u7uVD-PjGeyejhC2wVU?e=krdFGB" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:10px;border-radius:7px;background:#F5F1EB;">
					<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
					<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Reglamento de Atención de Reclamos y Solución de Controversias de OSITRAN</span>
					<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				</a>
			</div>
		</div>
	</div>
</section>
