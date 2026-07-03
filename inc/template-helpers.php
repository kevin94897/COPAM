<?php
/**
 * Small shared markup helpers, replacing ButtonPrimary.astro / ButtonSecondary.astro.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render the site logo, using the logo uploaded via Apariencia → Personalizar
 * → Identidad del sitio (add_theme_support( 'custom-logo' ) in functions.php)
 * when one is set, falling back to the bundled COPAM logo otherwise.
 *
 * Width/height on the fallback are hardcoded to the bundled PNG's real
 * 5409×966 aspect ratio (to avoid CLS); a Customizer-uploaded logo gets its
 * own real dimensions from wp_get_attachment_image(), so it won't distort
 * regardless of its aspect ratio.
 *
 * @param int $height Render height in pixels, matching the call site's CSS.
 */
function copam_render_logo( $height ) {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( $custom_logo_id ) {
		echo wp_get_attachment_image(
			$custom_logo_id,
			'full',
			false,
			array(
				'alt'      => get_bloginfo( 'name' ) . ' Logo',
				'decoding' => 'async',
				'style'    => sprintf( 'height:%dpx;width:auto;', $height ),
			)
		);
		return;
	}

	$width = (int) round( $height * 5409 / 966 );
	printf(
		'<img src="%1$s" alt="%2$s" width="%3$d" height="%4$d" decoding="async" style="height:%4$dpx;width:auto;" />',
		esc_url( get_template_directory_uri() . '/assets/images/LOGO COPAM.png' ),
		esc_attr( get_bloginfo( 'name' ) . ' Logo' ),
		$width,
		$height
	);
}

/**
 * Render a CTA link matching the original Astro ButtonPrimary/ButtonSecondary components.
 *
 * @param string $href    Link target.
 * @param string $label   Visible label text.
 * @param string $variant 'primary' or 'secondary'.
 * @param bool   $icon    Whether to show the trailing arrow icon.
 * @param string $target  Optional link target, e.g. '_blank'.
 */
function copam_button( $href, $label, $variant = 'primary', $icon = null, $target = '' ) {
	if ( null === $icon ) {
		$icon = 'primary' === $variant;
	}

	$class = 'primary' === $variant ? 'btn-primary' : 'btn-secondary';
	$rel   = '_blank' === $target ? ' rel="noopener noreferrer"' : '';
	$targ  = $target ? sprintf( ' target="%s"', esc_attr( $target ) ) : '';

	printf(
		'<a href="%1$s" class="%2$s"%3$s%4$s>%5$s',
		esc_url( $href ),
		esc_attr( $class ),
		$targ,
		$rel,
		esc_html( $label )
	);

	if ( $icon ) {
		echo ' <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 4.5h10.182m-4-3.5 4 3.5-4 3.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
	}

	echo '</a>';
}

/**
 * Resolve the URL of the WordPress Page currently assigned to a given
 * theme page template (e.g. 'template-politica-privacidad.php'), so
 * links stay correct regardless of the slug an editor chose in wp-admin.
 *
 * @param string $template_filename Template file name, relative to the theme root.
 * @return string Page URL, or '#' if no page uses that template yet.
 */
function copam_legal_page_url( $template_filename ) {
	static $cache = array();

	if ( isset( $cache[ $template_filename ] ) ) {
		return $cache[ $template_filename ];
	}

	$pages = get_posts(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'meta_key'       => '_wp_page_template',
			'meta_value'     => $template_filename,
			'posts_per_page' => 1,
			'fields'         => 'ids',
		)
	);

	$cache[ $template_filename ] = $pages ? get_permalink( $pages[0] ) : '#';

	return $cache[ $template_filename ];
}

/**
 * Render a card for a regulatory document currently in force, so visitors
 * and OSITRAN reviewers can tell at a glance which version applies today.
 *
 * @param string $title Document title.
 * @param string $meta  Optional meta line, e.g. 'En vigencia desde: 16 de junio de 2026'.
 * @param string $href  Download link.
 */
function copam_vigente_doc_card( $title, $meta, $href ) {
	printf(
		'<div style="background:white;border-radius:12px;padding:20px;display:flex;flex-direction:column;gap:10px;box-shadow:0 1px 3px rgba(0,0,0,0.05);border:1px solid #E5E0D3;">
			<div style="display:flex;align-items:center;justify-content:space-between;gap:12px;">
				<h4 style="font-size:16px;font-weight:600;color:#1C2118;margin:0;">%1$s</h4>
				<span style="font-size:11px;font-weight:700;letter-spacing:0.06em;color:#1C5E35;background:#EDF5F0;padding:3px 9px;border-radius:20px;flex-shrink:0;white-space:nowrap;">VIGENTE</span>
			</div>
			%2$s
			<a href="%3$s" target="_blank" rel="noopener noreferrer" style="display:inline-flex;align-items:center;gap:6px;font-size:14.5px;font-weight:600;color:#1C5E35;width:fit-content;">
				<svg width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#1C5E35" stroke-width="1.4" stroke-linecap="round"></path></svg>
				Descargar PDF
			</a>
		</div>',
		esc_html( $title ),
		$meta ? sprintf( '<p style="font-size:14px;color:#7A7468;margin:0;">%s</p>', esc_html( $meta ) ) : '',
		esc_url( $href )
	);
}

/**
 * Render one row inside the "Historial documental" disclosure — a document
 * that has been superseded but is kept reachable for historical consultation.
 *
 * @param string $title  Document title.
 * @param string $status Status line, e.g. 'Histórico, vigente hasta el 15.06.2026.'.
 * @param string $href   Download link.
 */
function copam_historico_doc_row( $title, $status, $href ) {
	printf(
		'<a href="%3$s" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;gap:12px;padding:12px 14px;background:white;border-radius:8px;">
			<div style="flex:1;display:flex;flex-direction:column;gap:2px;">
				<span style="font-size:15.5px;color:#4A5240;font-weight:600;">%1$s</span>
				<span style="font-size:13.5px;color:#9B9285;">%2$s</span>
			</div>
			<svg width="11" height="11" viewBox="0 0 11 11" fill="none" style="flex-shrink:0;"><path d="M5.5 1v7M3 5.5l2.5 2.5L8 5.5" stroke="#9B9285" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 10h9" stroke="#9B9285" stroke-width="1.4" stroke-linecap="round"></path></svg>
		</a>',
		esc_html( $title ),
		esc_html( $status ),
		esc_url( $href )
	);
}

/**
 * Render the "Historial documental" block: a heading plus a closed accordion
 * ("Versiones históricas y documentos sustituidos") listing superseded
 * documents with a disclaimer, so the current version stands out while the
 * historical trail stays available for an eventual OSITRAN review.
 *
 * @param array $items Array of ['title' => ..., 'status' => ..., 'href' => ...].
 */
function copam_historico_details( array $items ) {
	if ( ! $items ) {
		return;
	}
	echo '<div style="margin-top:8px;">';
	echo '<h5 style="font-size:13px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;color:#9B9285;margin:0 0 8px;">Historial documental</h5>';
	echo '<details>';
	echo '<summary style="cursor:pointer;font-size:15px;font-weight:600;color:#1C2118;padding:12px 14px;background:#F5F1EB;border-radius:8px;">Versiones históricas y documentos sustituidos</summary>';
	echo '<div style="display:flex;flex-direction:column;gap:10px;padding:14px 2px 2px;">';
	echo '<p style="font-size:14px;color:#7A7468;line-height:1.6;margin:0;">Estos documentos se publican únicamente para fines de consulta histórica. No son aplicables a servicios solicitados a partir de la fecha de entrada en vigencia del documento actual.</p>';
	foreach ( $items as $item ) {
		copam_historico_doc_row( $item['title'], $item['status'], $item['href'] );
	}
	echo '</div></details>';
	echo '</div>';
}
