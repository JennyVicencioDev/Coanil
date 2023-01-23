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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coanil' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="container">
			<div class="site-branding">
				<img src="<?php if ( ! empty( get_header_image() ) ) : echo header_image();  endif; ?>" alt="">
	
				<?php
				if (has_custom_logo()) : 
					the_custom_logo();
				else : ?>
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/img/logos/logo.svg" class="img-fluid" alt="">
					</a>
				<?php endif; ?>

				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$wp_base_description = get_bloginfo( 'description', 'display' );
				if ( $wp_base_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $wp_base_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div>
					
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M11 20H29" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M11 14H29" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M11 26H29" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</button>
				
				<div class="menu-nav-container">
					<button class="menu-toggle close" aria-controls="primary-menu" aria-expanded="true">
						<svg xmlns="http://www.w3.org/2000/svg" width="33" height="31" fill="none" viewBox="0 0 33 31">
							<path stroke="#000" stroke-width="4" d="M1.814 2.108L29.22 29.514M1.814 29.514L30.933 2.108"/>
						</svg>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container' 		=> false
						)
					);
					?>
				</div>
			</nav><!-- #site-navigation -->
		</div>
		
	</header><!-- #masthead -->
