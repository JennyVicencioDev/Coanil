<?php 

/**
 * POST TYPES
 */

/* post type nanme */
// function custom_posttype_post_type() { 
// 	$labels = array(
// 		'name'                => esc_html__( '...', 'Post Type General Name', 'coanil' ),
// 		'singular_name'       => esc_html__( '...', 'Post Type Singular Name', 'coanil' ),
// 		'menu_name'           => esc_html__( '...', 'coanil' ),
// 		'parent_item_colon'   => esc_html__( 'Item padre:', 'coanil' ),
// 		'all_items'           => esc_html__( 'Todos los ...', 'coanil' ),
// 		'view_item'           => esc_html__( 'Ver ...', 'wp-coanil' ),
// 		'add_new_item'        => esc_html__( 'Nuevo ...', 'coanil' ),
// 		'add_new'             => esc_html__( 'Añadir nuevo ...', 'coanil' ),
// 		'edit_item'           => esc_html__( 'Editar ...', 'coanil' ),
// 		'update_item'         => esc_html__( 'Actualizar ...', 'coanil' ),
// 		'search_items'        => esc_html__( 'Buscar ...', 'coanil' ),
// 		'not_found'           => esc_html__( 'Not found', 'coanil' ),
// 		'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'coanil' ),
// 	);
// 	$args = array(
// 		'label'               => esc_html__( '...', 'coanil' ),
// 		'description'         => esc_html__( '...', 'coanil' ),
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'thumbnail', 'custom-fields' ),
// 		'taxonomies'          => array( 'thumbnail' ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'menu_position'       => 5,
// 		'menu_icon'           => 'dashicons-palmtree',
// 		'can_export'          => true,
// 		'has_archive'         => '...',
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'capability_type'     => 'post',
// 	);
// 	register_post_type( 'custom_posttype', $args );
// }
// add_action( 'init', 'custom_posttype', 0 );


// Change dashboard Posts to Blog
// function cp_change_post_object() {
// 	$get_post_type = get_post_type_object('post');
// 	$labels = $get_post_type->labels;
// 	$labels->singular_name = 'Blog';
// 	$labels->add_new = 'Añadir nuevo artículo';
// 	$labels->add_new_item = 'Añadir artículo';
// 	$labels->edit_item = 'Editar artículo';
// 	$labels->new_item = 'Artículo';
// 	$labels->view_item = 'Ver artículo';
// 	$labels->search_items = 'Buscar artículo';
// 	$labels->not_found = 'Artículo no encontrado';
// 	$labels->not_found_in_trash = 'Artículo no encontrado en la papelera';
// 	$labels->all_items = 'Todos los artículos';
// 	$labels->menu_name = 'Blog';
// 	$labels->name = 'Blog';
// 	$labels->name_admin_bar = 'Blog';
// 	// $get_post_type->rewrite = array('slug' => 'blog', 'with_front' => true);
// 	// var_dump($get_post_type);
// }
// add_action( 'init', 'cp_change_post_object' );

//change default post slug
// function change_post_permalinks() {
// 	global $wp_rewrite;
// 	//$wp_rewrite->page_structure = $wp_rewrite->root . '/page/%pagename%/'; // custom page permalinks
// 	$wp_rewrite->set_permalink_structure( $wp_rewrite->root . '/blog/%postname%/' ); // custom post permalinks
// }
// add_action( 'init', 'change_post_permalinks' );


