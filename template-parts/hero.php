<?php
/**
 * Hero section — ported from src/components/Hero.astro.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="inicio" class="hero">
	<div class="hero__bg-image"></div>
	<div class="hero__overlay"></div>
	<div class="hero__grid"></div>
	<div class="hero__glow"></div>
	<div class="hero__accent-bar"></div>

	<div class="hero__grid-layout">
		<div class="hero__content">
			<div class="hero__badge">
				<p style="margin:0;">Terminal habilitado bajo concesión del Estado</p>
				<a href="#regulatorio" class="hero__badge-link">
					<span>Regulatorio</span>
					<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 4.5h10.182m-4-3.5 4 3.5-4 3.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</a>
			</div>

			<h1>
				Terminal Portuario<br />
				<span class="accent">Fluvial de Yurimaguas</span>
			</h1>

			<p class="hero__lede">
				COPAM S.A. opera el terminal portuario fluvial habilitado en Yurimaguas
				bajo concesión del Estado peruano, articulando la cadena logística de la
				Amazonía nororiental con el resto del país.
			</p>

			<div class="hero__ctas">
				<?php copam_button( '#servicios', 'Conocer Servicios', 'primary' ); ?>
				<?php copam_button( '#regulatorio', 'Regulatorio', 'secondary' ); ?>
			</div>

			<div class="hero__regulated">
				<span class="hero__regulated-label">Concesión otorgada por el MTC; supervisada por OSITRAN; autoridad portuaria
competente: APN; depósito temporal bajo control aduanero de SUNAT. La atención de
usuarios se rige por la normativa aplicable de OSITRAN e INDECOPI.</span>
				<!-- <?php foreach ( array( 'OSITRAN', 'SUNAT', 'INDECOPI', 'MTC' ) as $entity ) : ?>
					<span class="hero__regulated-badge"><?php echo esc_html( $entity ); ?></span>
				<?php endforeach; ?> -->
			</div>
		</div>

		<div class="hero__card">
			<div>
				<div class="hero__card-eyebrow">Oficinas Administrativas</div>
				<div class="hero__card-title">COPAM S.A.</div>
			</div>

			<div class="hero__card-rows">
				<div class="hero__card-row">
					<div class="hero__card-icon">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 1C4.8 1 3 2.8 3 5c0 3.3 4 8 4 8s4-4.7 4-8c0-2.2-1.8-4-4-4zm0 5.5c-.8 0-1.5-.7-1.5-1.5S6.2 3.5 7 3.5 8.5 4.2 8.5 5 7.8 6.5 7 6.5z" fill="#C4941A"></path></svg>
					</div>
					<div>
						<div class="hero__card-row-label">Dirección</div>
						<div class="hero__card-row-value">Via de Evitamiento Km 0, Caserío<br />Santa Rosa (Río Huallaga), Yurimaguas</div>
					</div>
				</div>

				<div class="hero__card-row">
					<div class="hero__card-icon">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><rect x="1" y="3.5" width="12" height="7" rx="1.5" stroke="#C4941A" stroke-width="1.3"></rect><path d="M1 5.5l6 3 6-3" stroke="#C4941A" stroke-width="1.3"></path></svg>
					</div>
					<div>
						<div class="hero__card-row-label">Correo</div>
						<div class="hero__card-row-value"><a href="mailto:servicioclientes@copam.com.pe">servicioclientes@copam.com.pe</a></div>
					</div>
				</div>

				<div class="hero__card-row">
					<div class="hero__card-icon">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M4 1.5h2l1 2.5-1.5 1c.7 1.4 1.8 2.5 3 3L10 7l2.5 1V10c0 .6-.4 1-1 1C4.5 11 2 5 2 3c0-.6.4-1 1-1h1z" stroke="#C4941A" stroke-width="1.3" fill="none"></path></svg>
					</div>
					<div>
						<div class="hero__card-row-label">Teléfono</div>
						<div class="hero__card-row-value">(01) 500-0450</div>
					</div>
				</div>
			</div>

			<div class="hero__card-hours">
				<div class="hero__card-hours-label">Horario de Atención</div>
				<div class="hero__card-hours-row">
					<span>Lunes – Viernes</span>
					<span>08:00 – 17:00</span>
				</div>
				<div class="hero__card-hours-row">
					<span>Sábados</span>
					<span>08:00 – 13:00</span>
				</div>
			</div>
		</div>
	</div>
</section>
