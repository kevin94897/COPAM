<?php
/**
 * Libro de Reclamaciones — admin module.
 *
 * Registers the 'copam_reclamo' post type used to keep a permanent record
 * of every submission from the Contacto form, independent of whether the
 * notification e-mail (inc/reclamos-mail.php) is delivered.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function copam_register_reclamo_cpt() {
	register_post_type(
		'copam_reclamo',
		array(
			'labels'          => array(
				'name'          => 'Reclamos',
				'singular_name' => 'Reclamo',
				'menu_name'     => 'Libro de Reclamaciones',
				'all_items'     => 'Todos los reclamos',
				'view_item'     => 'Ver reclamo',
				'search_items'  => 'Buscar reclamos',
				'not_found'     => 'No se encontraron reclamos',
			),
			'public'          => false,
			'show_ui'         => true,
			'show_in_menu'    => true,
			'menu_icon'       => 'dashicons-media-document',
			'capability_type' => 'post',
			'capabilities'    => array(
				'create_posts' => 'do_not_allow',
			),
			'map_meta_cap'    => true,
			'supports'        => array( 'title' ),
			'has_archive'     => false,
			'rewrite'         => false,
			'show_in_rest'    => false,
		)
	);
}
add_action( 'init', 'copam_register_reclamo_cpt' );

function copam_reclamo_columns( $columns ) {
	unset( $columns['date'] );

	$columns['tipo_reclamo'] = 'Tipo';
	$columns['tipo_bien']    = 'Bien';
	$columns['documento']    = 'Documento';
	$columns['contacto']     = 'Contacto';
	$columns['date']         = 'Fecha';

	return $columns;
}
add_filter( 'manage_copam_reclamo_posts_columns', 'copam_reclamo_columns' );

function copam_reclamo_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'tipo_reclamo':
			echo esc_html( ucfirst( get_post_meta( $post_id, 'tipo_reclamo', true ) ) );
			break;
		case 'tipo_bien':
			echo esc_html( ucfirst( get_post_meta( $post_id, 'tipo_bien', true ) ) );
			break;
		case 'documento':
			echo esc_html( get_post_meta( $post_id, 'documento_identidad', true ) );
			break;
		case 'contacto':
			echo esc_html( get_post_meta( $post_id, 'contacto', true ) );
			break;
	}
}
add_action( 'manage_copam_reclamo_posts_custom_column', 'copam_reclamo_column_content', 10, 2 );

function copam_reclamo_meta_box() {
	add_meta_box( 'copam_reclamo_detalle', 'Detalle del reclamo', 'copam_reclamo_meta_box_render', 'copam_reclamo', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'copam_reclamo_meta_box' );

/**
 * Read-only view of the submitted fields; records are created only by
 * copam_handle_reclamo_submit() and are not meant to be edited afterward.
 *
 * @param WP_Post $post Current post.
 */
function copam_reclamo_meta_box_render( $post ) {
	$fields = array(
		'nombre_completo'     => 'Nombre completo',
		'domicilio'           => 'Domicilio',
		'documento_identidad' => 'Documento de identidad',
		'contacto'            => 'Teléfono / e-mail',
		'tipo_bien'           => 'Tipo de bien',
		'descripcion_bien'    => 'Descripción del bien',
		'tipo_reclamo'        => 'Tipo de reclamación',
		'detalle_reclamo'     => 'Detalle de la reclamación',
		'declaracion_jurada'  => 'Declaración jurada',
	);

	echo '<table class="form-table"><tbody>';
	foreach ( $fields as $key => $label ) {
		$value = get_post_meta( $post->ID, $key, true );

		if ( 'declaracion_jurada' === $key ) {
			$value = $value ? 'Aceptada por el usuario' : 'No aceptada';
		} elseif ( in_array( $key, array( 'tipo_bien', 'tipo_reclamo' ), true ) ) {
			$value = ucfirst( $value );
		}

		printf(
			'<tr><th style="width:220px;text-align:left;">%s</th><td>%s</td></tr>',
			esc_html( $label ),
			wp_kses_post( nl2br( esc_html( $value ) ) )
		);
	}
	echo '</tbody></table>';
}
