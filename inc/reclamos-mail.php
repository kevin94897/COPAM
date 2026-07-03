<?php
/**
 * Libro de Reclamaciones form handler.
 *
 * Receives the Contacto multi-step form's POST via admin-post.php,
 * validates and sanitizes it, stores it as a 'copam_reclamo' record
 * (inc/reclamos-cpt.php) so it survives even if the notification e-mail
 * to servicioclientes@copam.com.pe fails, and redirects back to the form
 * with a ?reclamo=ok|error query flag the front-end banner reads on load.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COPAM_RECLAMO_TO', 'servicioclientes@copam.com.pe' );


add_action( 'admin_post_copam_reclamo_submit', 'copam_handle_reclamo_submit' );
add_action( 'admin_post_nopriv_copam_reclamo_submit', 'copam_handle_reclamo_submit' );

function copam_handle_reclamo_submit() {
	check_admin_referer( 'copam_reclamo_submit', 'copam_reclamo_nonce' );

	$redirect_base = wp_get_referer() ? wp_get_referer() : home_url( '/#formulario-libro' );

	// Honeypot: bots that fill this hidden field get a fake success, no mail sent.
	if ( ! empty( $_POST['website'] ) ) {
		wp_safe_redirect( add_query_arg( 'reclamo', 'ok', $redirect_base ) );
		exit;
	}

	$tipo_bien_raw    = isset( $_POST['tipo_bien'] ) ? sanitize_text_field( wp_unslash( $_POST['tipo_bien'] ) ) : '';
	$tipo_reclamo_raw = isset( $_POST['tipo_reclamo'] ) ? sanitize_text_field( wp_unslash( $_POST['tipo_reclamo'] ) ) : '';

	$data = array(
		'nombre_completo'     => isset( $_POST['nombre_completo'] ) ? sanitize_text_field( wp_unslash( $_POST['nombre_completo'] ) ) : '',
		'domicilio'           => isset( $_POST['domicilio'] ) ? sanitize_text_field( wp_unslash( $_POST['domicilio'] ) ) : '',
		'documento_identidad' => isset( $_POST['documento_identidad'] ) ? sanitize_text_field( wp_unslash( $_POST['documento_identidad'] ) ) : '',
		'contacto'            => isset( $_POST['contacto'] ) ? sanitize_text_field( wp_unslash( $_POST['contacto'] ) ) : '',
		'tipo_bien'           => in_array( $tipo_bien_raw, array( 'producto', 'servicio' ), true ) ? $tipo_bien_raw : 'servicio',
		'descripcion_bien'    => isset( $_POST['descripcion_bien'] ) ? sanitize_textarea_field( wp_unslash( $_POST['descripcion_bien'] ) ) : '',
		'tipo_reclamo'        => in_array( $tipo_reclamo_raw, array( 'reclamo', 'queja' ), true ) ? $tipo_reclamo_raw : 'reclamo',
		'detalle_reclamo'     => isset( $_POST['detalle_reclamo'] ) ? sanitize_textarea_field( wp_unslash( $_POST['detalle_reclamo'] ) ) : '',
		'declaracion_jurada'  => isset( $_POST['declaracion_jurada'] ),
	);

	$required = array( 'nombre_completo', 'domicilio', 'documento_identidad', 'contacto', 'descripcion_bien', 'detalle_reclamo' );
	foreach ( $required as $field ) {
		if ( '' === $data[ $field ] ) {
			wp_safe_redirect( add_query_arg( 'reclamo', 'error', $redirect_base ) );
			exit;
		}
	}
	if ( ! $data['declaracion_jurada'] ) {
		wp_safe_redirect( add_query_arg( 'reclamo', 'error', $redirect_base ) );
		exit;
	}

	$tipo_reclamo_label = 'queja' === $data['tipo_reclamo'] ? 'Queja' : 'Reclamo';

	copam_save_reclamo_record( $data, $tipo_reclamo_label );

	$subject = sprintf( '[%s] Libro de Reclamaciones — %s', $tipo_reclamo_label, $data['nombre_completo'] );

	$headers = array( 'Content-Type: text/html; charset=UTF-8' );
	if ( is_email( $data['contacto'] ) ) {
		$headers[] = 'Reply-To: ' . $data['contacto'];
	}

	$sent = wp_mail( COPAM_RECLAMO_TO, $subject, copam_build_reclamo_email_html( $data ), $headers );

	wp_safe_redirect( add_query_arg( 'reclamo', $sent ? 'ok' : 'error', $redirect_base ) );
	exit;
}

/**
 * Store the submission as a 'copam_reclamo' record so it's kept even if
 * the notification e-mail above fails to send.
 *
 * @param array  $data               Sanitized form fields.
 * @param string $tipo_reclamo_label 'Reclamo' or 'Queja', used for the post title.
 */
function copam_save_reclamo_record( array $data, $tipo_reclamo_label ) {
	$post_id = wp_insert_post(
		array(
			'post_type'   => 'copam_reclamo',
			'post_title'  => sprintf( '%s — %s', $tipo_reclamo_label, $data['nombre_completo'] ),
			'post_status' => 'publish',
		),
		true
	);

	if ( is_wp_error( $post_id ) ) {
		return;
	}

	foreach ( $data as $key => $value ) {
		update_post_meta( $post_id, $key, $value );
	}
}

/**
 * Build the notification email body, styled with the site's palette.
 *
 * @param array $data Sanitized form fields.
 * @return string HTML email body.
 */
function copam_build_reclamo_email_html( array $data ) {
	$row = function ( $label, $value ) {
		return sprintf(
			'<tr>
				<td style="padding:10px 0;border-bottom:1px solid #EDE9E2;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;color:#8F8A80;width:220px;vertical-align:top;">%s</td>
				<td style="padding:10px 0;border-bottom:1px solid #EDE9E2;font-size:15px;color:#1C2118;vertical-align:top;">%s</td>
			</tr>',
			esc_html( $label ),
			nl2br( esc_html( $value ) )
		);
	};

	$tipo_reclamo_label = 'queja' === $data['tipo_reclamo'] ? 'Queja' : 'Reclamo';
	$tipo_bien_label    = 'producto' === $data['tipo_bien'] ? 'Producto' : 'Servicio';
	$timestamp          = wp_date( 'd/m/Y H:i' );

	ob_start();
	?>
	<div style="background:#F5F1EB;padding:32px 16px;font-family:Arial,Helvetica,sans-serif;">
		<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:640px;margin:0 auto;background:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #E2DDD5;">
			<tr>
				<td style="background:#0A2618;padding:28px 32px;border-top:3px solid #C4941A;">
					<div style="font-size:13px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:#C4941A;margin-bottom:6px;">COPAM S.A.</div>
					<div style="font-size:20px;font-weight:700;color:#ffffff;">Libro de Reclamaciones Virtual</div>
				</td>
			</tr>
			<tr>
				<td style="padding:24px 32px 8px;">
					<span style="display:inline-block;font-size:13px;font-weight:700;letter-spacing:0.05em;text-transform:uppercase;color:#ffffff;background:#B34A20;padding:5px 12px;border-radius:5px;"><?php echo esc_html( $tipo_reclamo_label ); ?></span>
				</td>
			</tr>
			<tr>
				<td style="padding:8px 32px 24px;">
					<table role="presentation" width="100%" cellpadding="0" cellspacing="0">
						<?php
						echo $row( 'Nombre completo', $data['nombre_completo'] );
						echo $row( 'Domicilio', $data['domicilio'] );
						echo $row( 'Documento de identidad', $data['documento_identidad'] );
						echo $row( 'Teléfono / e-mail', $data['contacto'] );
						echo $row( 'Tipo de bien', $tipo_bien_label );
						echo $row( 'Descripción del bien', $data['descripcion_bien'] );
						echo $row( 'Detalle de la reclamación', $data['detalle_reclamo'] );
						echo $row( 'Declaración jurada', 'Aceptada por el usuario' );
						echo $row( 'Fecha de registro', $timestamp );
						?>
					</table>
				</td>
			</tr>
			<tr>
				<td style="background:#F9F8F6;padding:16px 32px;border-top:1px solid #E2DDD5;font-size:12px;color:#8F8A80;font-style:italic;">
					Sustento Legal: Resolución de Consejo Directivo N° 019-2011-CD-OSITRAN
				</td>
			</tr>
		</table>
	</div>
	<?php
	return ob_get_clean();
}
