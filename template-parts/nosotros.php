<?php
/**
 * Nosotros section — ported from src/components/Nosotros.astro.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="nosotros" style="padding:112px 36px;background:white;">
	<div class="container">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:14px;margin-bottom:72px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">Institución</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Nosotros</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">COPAM S.A. opera el Terminal Portuario Fluvial de Yurimaguas bajo concesión del Estado peruano, comprometida con la eficiencia logística, el cumplimiento normativo y el desarrollo sostenible de la Amazonía.</p>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:24px;" class="r-docs">

			<div data-reveal="" style="background:#F4F8F5;border-radius:14px;padding:36px;display:flex;flex-direction:column;gap:18px;border:1px solid #C8DDD0;border-top:3px solid #1C5E35;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
				<div style="width:40px;height:40px;background:#D6EAE0;border-radius:9px;display:flex;align-items:center;justify-content:center;">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="7" y="1" width="6" height="5" rx="1.2" stroke="#1C5E35" stroke-width="1.4"></rect><rect x="1" y="14" width="6" height="5" rx="1.2" stroke="#1C5E35" stroke-width="1.4"></rect><rect x="7" y="14" width="6" height="5" rx="1.2" stroke="#1C5E35" stroke-width="1.4"></rect><rect x="13" y="14" width="6" height="5" rx="1.2" stroke="#1C5E35" stroke-width="1.4"></rect><path d="M10 6v3M10 9H4v2M10 9h6v2" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				</div>
				<div>
					<h3 style="font-size:17.5px;font-weight:700;color:#1C2118;margin-bottom:8px;">Organigrama Institucional</h3>
					<p style="font-size:15.5px;color:#6B6558;line-height:1.65;">Estructura orgánica de COPAM S.A. — Directorio, Gerencia General, áreas de Operaciones, Administración, Finanzas y Seguridad Portuaria.</p>
				</div>
				<div style="border-top:1px solid #C8DDD0;padding-top:16px;display:flex;align-items:center;justify-content:space-between;">
					<span style="font-size:13.5px;color:#9B9285;">Actualizado: ene. 2025</span>
					<!-- <a href="#" style="display:inline-flex;align-items:center;gap:5px;font-size:15.5px;font-weight:600;color:#1C5E35;background:#D6EAE0;padding:6px 12px;border-radius:6px;">
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C2118" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C2118" stroke-width="1.4" stroke-linecap="round"></path></svg>
						Ver PDF
					</a> -->
				</div>
			</div>

			<div data-reveal="" style="background:#F4F8F5;border-radius:14px;padding:36px;display:flex;flex-direction:column;gap:18px;border:1px solid #C8DDD0;border-top:3px solid #1C5E35;transition:opacity 0.65s ease 0.18s,transform 0.65s ease 0.18s;">
				<div style="width:40px;height:40px;background:#D6EAE0;border-radius:9px;display:flex;align-items:center;justify-content:center;">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="8" stroke="#1C5E35" stroke-width="1.4"></circle><path d="M10 2c0 4-4 6-4 10M10 2c0 4 4 6 4 10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path><path d="M2 10h16" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				</div>
				<div>
					<h3 style="font-size:17.5px;font-weight:700;color:#1C2118;margin-bottom:8px;">Sostenibilidad Ambiental</h3>
					<p style="font-size:15.5px;color:#6B6558;line-height:1.65;">COPAM cuenta con Instrumento de Gestión Ambiental (IGA) aprobado por el SENACE/PRODUCE. La operación portuaria se desarrolla conforme a los compromisos ambientales establecidos.</p>
				</div>
				<div style="border-top:1px solid #C8DDD0;padding-top:16px;display:flex;flex-direction:column;gap:8px;">
					<!-- <a href="#" style="display:flex;align-items:center;gap:10px;padding:8px 10px;background:white;border-radius:7px;border:1px solid #EBEBEB;">
						<span style="font-size:12.5px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 6px;border-radius:3px;flex-shrink:0;">PDF</span>
						<span style="font-size:15.5px;color:#1C2118;font-weight:500;flex:1;">Instrumento de Gestión Ambiental (IGA)</span>
						<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
					</a> -->
					<span style="font-size:13.5px;color:#9B9285;padding-left:2px;">Vigente · aprobado SENACE</span>
				</div>
			</div>

			<div data-reveal="" style="background:#F4F8F5;border-radius:14px;padding:36px;display:flex;flex-direction:column;gap:18px;border:1px solid #C8DDD0;border-top:3px solid #1C5E35;transition:opacity 0.65s ease 0.26s,transform 0.65s ease 0.26s;">
				<div style="width:40px;height:40px;background:#D6EAE0;border-radius:9px;display:flex;align-items:center;justify-content:center;">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 2L3 5v5c0 4.4 3 8.2 7 9 4-0.8 7-4.6 7-9V5l-7-3z" stroke="#1C5E35" stroke-width="1.4" stroke-linejoin="round"></path><path d="M7 10l2 2 4-4" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
				</div>
				<div>
					<div style="font-size:12.5px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:#6B6558;margin-bottom:6px;">PBIP · IMO</div>
					<h3 style="font-size:17.5px;font-weight:700;color:#1C2118;margin-bottom:8px;">Seguridad Portuaria</h3>
					<p style="font-size:15.5px;color:#6B6558;line-height:1.65;">El terminal opera bajo el Código Internacional para la Protección de Buques e Instalaciones Portuarias (PBIP/ISPS). La información de carácter público sobre nuestro sistema de seguridad se publica conforme a normativa de la DICAPI y la OMI.</p>
				</div>
				<div style="border-top:1px solid #C8DDD0;padding-top:16px;">
					<span style="font-size:13.5px;color:#9B9285;">Certificado PBIP vigente · DICAPI</span>
				</div>
			</div>

		</div>
	</div>
</section>
