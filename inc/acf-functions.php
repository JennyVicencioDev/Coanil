<?php 

/**
 * Advanced Custom Fields functions
 *
 */

/* Acf color picker fix */
// function tu_mundo_acf_input_admin_footer() { 
?>
	<!-- <script type="text/javascript">
	(function($) {
		acf.add_filter('color_picker_args', function( args, $field ){
		// add the hexadecimal codes here for the colors you want to appear as swatches
         args.palettes = [
            '#FFFFFF', 
            '#000000', 
            '#007591', 
            '#ff8000', 
            '#014F86', 
            '#00AAE5', 
            '#FFDA00', 
            '#A81F83', 
            '#E83484', 
            '#525252'
         ]
		// return colors
		return args; 
		});
	})(jQuery);
	</script> -->
<?php 
// } 
// add_action('acf/input/admin_footer', 'tu_mundo_acf_input_admin_footer');

/* Add Options Page */
// if( function_exists('acf_add_options_page') ) {

	// Configuración general  
   // acf_add_options_page(array(
	// 	'page_title'	=> 'Configuración tema',
	// 	'menu_title'	=> 'Configuración tema',
	// 	'menu_slug'		=> 'main-config',
	// 	'icon_url'		=> 'dashicons-admin-site',
	// 	'position'		=> '2',
	// 	'update_button' => __('Actualizar información', 'acf'),
	// 	'updated_message' => __("Actualizado.", 'acf'),
   // ));

	// Configuración -> submenú
	// acf_add_options_page(array(
	// 	'page_title'  => 'Submenu',
	// 	'menu_title'  => 'Submenu',
	// 	'menu_slug' => 'submenu',
	// 	'update_button' => __('Actualizar información', 'acf'),
	// 	'updated_message' => __("Actualizado.", 'acf'),
	// 	// 'position'		=> '3',
	// 	'parent_slug' => '/sub-config',
	// ));

// }

// add_action('acf/init', 'my_acf_op_init');
// function my_acf_op_init() {
	
// 	/* Add Options Subpage */
// 	if( function_exists('acf_add_options_sub_page') ) {
	
// 		
	
// 	}

// }


