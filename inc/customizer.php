<?php
/**
 * WP base underscores Theme Customizer
 *
 * @package coanil_2023
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wp_base_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wp_base_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wp_base_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'wp_base_customize_register' );

/**
 * Add multiple custom logos
 */

 // logo claro
 function light_logo_customize_register( $wp_customize ){
	$wp_customize->add_setting('light_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'light_logo', array(
		'label'    => __('Logo Claro', 'mundo'),
		'section'  => 'title_tagline',
		'settings' => 'light_logo',
		// 'priority'       => 2,
	)));
}
function custom_light_logo() {
	echo get_theme_mod('light_logo');
}
add_action('customize_register', 'light_logo_customize_register');

// logo oscuro
function dark_logo_customize_register( $wp_customize ){
	$wp_customize->add_setting('dark_logo');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dark_logo', array(
		'label'    => __('Logo Oscuro', 'mundo'),
		'section'  => 'title_tagline',
		'settings' => 'dark_logo',
		// 'priority'       => 2,
	)));
}
function custom_dark_logo() {
	echo get_theme_mod('dark_logo');
}
add_action('customize_register', 'dark_logo_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wp_base_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wp_base_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_base_customize_preview_js() {
	wp_enqueue_script( 'coanil-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'wp_base_customize_preview_js' );
