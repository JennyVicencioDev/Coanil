<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coanil_2023
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'coanil' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container">
			<div class="row">
				<div class="site-branding">
					<?php
					if (has_custom_logo()) : 
						the_custom_logo();
					else : ?>
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_template_directory_uri() ?>/img/logos/logo-coanil.svg" class="img-fluid" alt="">
						</a>
					<?php endif; ?>
				</div>
				<nav class="site-navigation">
					<div class="navigation-links d-none d-lg-flex">
						<a href="<?php echo get_home_url(); ?>/contacto" class="btn fw-normal px-3">Contacto</a>
						<a href="<?php echo get_home_url(); ?>/hazte-socio" class="btn btn-outline-secondary">Hazte socio</a>
						<a href="<?php echo get_home_url(); ?>/donar" class="btn btn-secondary">Quiero donar</a>
					</div>
					<div class="main-navigation">	
						<button class="menu-toggle" aria-controls="menu-nav" aria-expanded="false">
							<svg width="16" height="16" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 0H16V2H0V0ZM0 5H16V7H0V5ZM0 10H16V12H0V10Z" fill="#005D9F" />
							</svg>
						</button>
						<div class="menu-nav-container">
							<div class="menu-nav-header">
								<div class="site-branding p-0">
									<?php
									if (has_custom_logo()) : 
										the_custom_logo();
									else : ?>
										<a href="<?php echo get_home_url(); ?>">
											<img src="<?php echo get_template_directory_uri() ?>/img/logos/logo-coanil.svg" class="img-fluid" alt="">
										</a>
									<?php endif; ?>
								</div>
								<button class="menu-toggle close" aria-controls="menu-nav" aria-expanded="true">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 33 31">
										<path stroke="#005D9F" stroke-width="2" d="M1.814 2.108L29.22 29.514M1.814 29.514L30.933 2.108"/>
									</svg>
								</button>
							</div>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-navbar',
									'menu_id'        => 'menu-nav',
									'container' 		=> false
								)
							);
							?>
							<div class="navigation-links d-lg-none">
								<a href="<?php echo get_home_url(); ?>/hazte-socio" class="btn btn-sm btn-outline-secondary px-3">Hazte socio</a>
								<a href="<?php echo get_home_url(); ?>/donar" class="btn btn-sm btn-secondary px-3">Quiero donar</a>
							</div>
						</div>
						<div class="menu-nav-backdrop"></div>
					</div>
				</nav>
			</div>
		</div>
		
	</header>
