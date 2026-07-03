<?php
/**
 * Operaciones - Reglamentos section — documentos que rigen la operación
 * del terminal (Reglamento de Operaciones TPY-NR y Reglamento Marco de Acceso).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="operaciones" style="padding:112px 36px;background:white;">
	<div style="max-width:1760px;margin:0 auto;">

		<div data-reveal="" style="display:flex;flex-direction:column;gap:10px;margin-bottom:52px;transition:opacity 0.65s ease,transform 0.65s ease;">
			<span style="font-size:14px;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;color:#B34A20;">OSITRAN · Reglamentos</span>
			<h2 style="font-size:48px;font-weight:700;letter-spacing:-0.028em;color:#1C2118;line-height:1.05;">Operaciones y Reglamentos</h2>
			<p style="font-size:17px;color:#6B6558;line-height:1.65;max-width:900px;margin-top:4px;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;">
				Normativa vigente que regula las operaciones del Terminal Portuario de Yurimaguas – Nueva Reforma (TPY-NR) y el acceso a su infraestructura.
			</p>
		</div>

		<div data-reveal="" style="background:#F5F1EB;border-radius:12px;padding:24px;transition:opacity 0.65s ease 0.1s,transform 0.65s ease 0.1s;">
			<h4 style="font-size:15.5px;font-weight:600;color:#1C2118;margin-bottom:16px;">Documentos Operaciones</h4>
			<div style="display:flex;flex-direction:column;gap:14px;">
				<div class="r-docs" style="display:grid;grid-template-columns:1fr;gap:12px;max-width:560px;">
					<?php copam_vigente_doc_card( 'Reglamento de Operaciones — REOP TPY-NR', 'Vigente desde: 11 de junio de 2026', 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQArZpMul116S7BfvN3KKACgAdgP46RNi1zSb6-FtFP0Vjs?e=IRhQJS' ); ?>
				</div>
				<?php
				copam_historico_details(
					array(
						array(
							'title'  => 'REOP 01.04.2024',
							'status' => 'Histórico, sustituido por REOP vigente.',
							'href'   => 'https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQDdmVGR00DdRrnrIhVJV8SdAea77z_SV9woAkpl3cFkRdk?e=n1Ti0P',
						),
					)
				);
				?>
				<a href="https://concesionariapuertoamazonas.sharepoint.com/:b:/g/IQCGlXJ2LTNTSofMzSFE8aUeAXNgl8YgclIWUp6jZXxZoxg?e=0UwIXa" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;box-shadow:0 1px 3px rgba(0,0,0,0.05);max-width:560px;">
					<span style="font-size:13px;font-weight:700;color:#B34A20;background:#FEF0EA;padding:2px 7px;border-radius:3px;flex-shrink:0;">PDF</span>
					<span style="font-size:16px;color:#1C2118;font-weight:500;flex:1;">Reglamento Marco de Acceso a la Infraestructura de Transporte de Uso Público</span>
					<svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M6 1v8M3.5 6.5L6 9l2.5-2.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 11h10" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				</a>
			</div>
		</div>
	</div>
</section>
