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
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="icon" type="image/x-icon"
		href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon.ico'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="main-header" class="site-header">
		<div class="container">
			<div class="site-header__inner">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
					<?php copam_render_logo(32); ?>
				</a>

				<button id="menu-toggle" class="menu-toggle" aria-label="Abrir menú">
					<svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
						stroke-linejoin="round">
						<path d="M4 6h16M4 12h16M4 18h16" />
					</svg>
				</button>

				<nav aria-label="Principal">
					<ul id="main-nav" class="main-nav hidden">
						<?php foreach ($copam_nav_links as $link): ?>
							<li><a href="<?php echo esc_url($link['href']); ?>"><?php echo esc_html($link['label']); ?></a>
							</li>
						<?php endforeach; ?>

						<li class="nav-cta-mobile">
							<a href="#seguimiento" class="btn-tracking">
								Seguimiento de Carga
							</a>
						</li>
					</ul>
				</nav>

				<a id="header-tracking-btn" href="http://45.232.151.188:8081/consultacarga/" class="header-cta"
					target="_blank" rel="noopener noreferrer">
					Seguimiento de Carga
				</a>
			</div>
		</div>
	</header>

	<main id="main-content">