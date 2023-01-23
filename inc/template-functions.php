<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package coanil_2023
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wp_base_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'wp_base_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function wp_base_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'wp_base_pingback_header' );

/**
 * Change the Customizer color palette presets
 */
function custom_customizer_color_palette() {
?>
	<!-- <script>
	jQuery(document).ready(function($){
		$('.wp-picker-container').iris({
			mode: 'hsl',
			controls: {
				horiz: 'h', // square horizontal displays hue
				vert: 's', // square vertical displays saturdation
				strip: 'l' // slider displays lightness
			},
			palettes: [
				'#FFFFFF', 
				'#000000', 
				'#007591', 
				'#EF7D25', 
				'#014F86', 
				'#00AAE5', 
				'#FFDA00', 
				'#A81F83', 
				'#E83484', 
				'#525252'
			]
		})
	});
	</script> -->
<?php
}
add_action('customize_controls_print_footer_scripts', 'custom_customizer_color_palette' );
