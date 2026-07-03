<?php
/**
 * Site header — ported from src/components/Header.astro.
 */

if (!defined('ABSPATH')) {
	exit;
}

$copam_nav_links = array(
	array('href' => '#nosotros', 'label' => 'Nosotros'),
	array('href' => '#regulatorio', 'label' => 'Zona Clientes'),
	array('href' => '#operaciones', 'label' => 'Operaciones'),
	array('href' => '#servicios', 'label' => 'Servicios'),
	array('href' => '#ositran', 'label' => 'OSITRAN'),
	array('href' => '#reclamos', 'label' => 'Reclamos'),
	array('href' => '#contacto', 'label' => 'Contacto'),
);
?>
<!doctype html>
<html lang="es">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="COPAM S.A. - Terminal Portuario Fluvial de Yurimaguas" />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon.svg'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="main-header" class="site-header">
		<div class="site-header__inner">
			<a href="#inicio" class="site-logo">
				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LOGO COPAM.png'); ?>"
					alt="COPAM Logo" />
			</a>

			<button id="menu-toggle" class="menu-toggle" aria-label="Abrir menú">
				<svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
					stroke-linejoin="round">
					<path d="M4 6h16M4 12h16M4 18h16" />
				</svg>
			</button>

			<ul id="main-nav" class="main-nav hidden">
				<?php foreach ($copam_nav_links as $link): ?>
					<li><a href="<?php echo esc_url($link['href']); ?>"><?php echo esc_html($link['label']); ?></a></li>
				<?php endforeach; ?>

				<li class="nav-cta-mobile">
					<a href="#seguimiento" class="btn-tracking">
						<svg width="14" height="14" viewBox="0 0 14 14" fill="none">
							<path d="M1 3.5h12v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-8z" stroke="white" stroke-width="1.3">
							</path>
							<path d="M1 3.5l6 4 6-4" stroke="white" stroke-width="1.3"></path>
							<path d="M4 1h6" stroke="white" stroke-width="1.3" stroke-linecap="round"></path>
							<circle cx="10.5" cy="3.5" r="2" fill="#F5C842"></circle>
						</svg>
						Seguimiento de Carga
					</a>
				</li>
			</ul>

			<a id="header-tracking-btn" href="http://45.232.151.188:8081/consultacarga/" class="header-cta"
				target="_blank" rel="noopener noreferrer">
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none">
					<path d="M1 3.5h12v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-8z" stroke="white" stroke-width="1.3"></path>
					<path d="M1 3.5l6 4 6-4" stroke="white" stroke-width="1.3"></path>
					<path d="M4 1h6" stroke="white" stroke-width="1.3" stroke-linecap="round"></path>
					<circle cx="10.5" cy="3.5" r="2" fill="#F5C842"></circle>
				</svg>
				Seguimiento de Carga
			</a>
		</div>
	</header>