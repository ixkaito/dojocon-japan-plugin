<?php
/**
 * Register post types
 */
function dojoconjapan_custom_post_types() {

	$labels = array(
		'name'                => __( 'Speakers', 'dojocon-japan' ),
		'singular_name'       => __( 'Speaker', 'dojocon-japan' ),
		'add_new'             => __( 'Add New', 'dojocon-japan' ),
		'add_new_item'        => __( 'Add New', 'dojocon-japan' ),
		'edit_item'           => __( 'Edit Speaker', 'dojocon-japan' ),
		'new_item'            => __( 'New Speaker', 'dojocon-japan' ),
		'view_item'           => __( 'View Speaker', 'dojocon-japan' ),
		'search_items'        => __( 'Search Speakers', 'dojocon-japan' ),
		'not_found'           => __( 'No Speakers found.', 'dojocon-japan' ),
		'not_found_in_trash'  => __( 'No Speakers found in Trash.', 'dojocon-japan' ),
		'parent_item_colon'   => __( 'Parent Speaker:', 'dojocon-japan' ),
		'menu_name'           => __( 'Speakers', 'dojocon-japan' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-megaphone',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array(
			'slug'       => 'speakers',
			'with_front' => false,
		),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
		),
	);

	register_post_type( 'speaker', $args );

	$labels = array(
		'name'                => __( 'Main Events', 'dojocon-japan' ),
		'singular_name'       => __( 'Main Event', 'dojocon-japan' ),
		'add_new'             => __( 'Add New', 'dojocon-japan' ),
		'add_new_item'        => __( 'Add New', 'dojocon-japan' ),
		'edit_item'           => __( 'Edit Main Event', 'dojocon-japan' ),
		'new_item'            => __( 'New Main Event', 'dojocon-japan' ),
		'view_item'           => __( 'View Main Event', 'dojocon-japan' ),
		'search_items'        => __( 'Search Main Events', 'dojocon-japan' ),
		'not_found'           => __( 'No Main Events found.', 'dojocon-japan' ),
		'not_found_in_trash'  => __( 'No Main Events found in Trash.', 'dojocon-japan' ),
		'parent_item_colon'   => __( 'Parent Main Event:', 'dojocon-japan' ),
		'menu_name'           => __( 'Main Events', 'dojocon-japan' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-flag',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array(
			'slug'       => 'main-events',
			'with_front' => false,
		),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
		),
	);

	register_post_type( 'main-event', $args );

	$labels = array(
		'name'                => __( 'Workshops', 'dojocon-japan' ),
		'singular_name'       => __( 'Workshop', 'dojocon-japan' ),
		'add_new'             => __( 'Add New', 'dojocon-japan' ),
		'add_new_item'        => __( 'Add New', 'dojocon-japan' ),
		'edit_item'           => __( 'Edit Workshop', 'dojocon-japan' ),
		'new_item'            => __( 'New Workshop', 'dojocon-japan' ),
		'view_item'           => __( 'View Workshop', 'dojocon-japan' ),
		'search_items'        => __( 'Search Workshops', 'dojocon-japan' ),
		'not_found'           => __( 'No Workshops found.', 'dojocon-japan' ),
		'not_found_in_trash'  => __( 'No Workshops found in Trash.', 'dojocon-japan' ),
		'parent_item_colon'   => __( 'Parent Workshop:', 'dojocon-japan' ),
		'menu_name'           => __( 'Workshops', 'dojocon-japan' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-hammer',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array(
			'slug'       => 'workshops',
			'with_front' => false,
		),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
		),
	);

	register_post_type( 'workshop', $args );

	$labels = array(
		'name'                => __( 'Sessions', 'dojocon-japan' ),
		'singular_name'       => __( 'Session', 'dojocon-japan' ),
		'add_new'             => __( 'Add New', 'dojocon-japan' ),
		'add_new_item'        => __( 'Add New', 'dojocon-japan' ),
		'edit_item'           => __( 'Edit Session', 'dojocon-japan' ),
		'new_item'            => __( 'New Session', 'dojocon-japan' ),
		'view_item'           => __( 'View Session', 'dojocon-japan' ),
		'search_items'        => __( 'Search Sessions', 'dojocon-japan' ),
		'not_found'           => __( 'No Sessions found.', 'dojocon-japan' ),
		'not_found_in_trash'  => __( 'No Sessions found in Trash.', 'dojocon-japan' ),
		'parent_item_colon'   => __( 'Parent Session:', 'dojocon-japan' ),
		'menu_name'           => __( 'Sessions', 'dojocon-japan' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-schedule',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array(
			'slug'       => 'sessions',
			'with_front' => false,
		),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
		),
	);

	register_post_type( 'session', $args );

	$labels = array(
		'name'                  => _x( 'Categories', 'Taxonomy plural name', 'dojocon-japan' ),
		'singular_name'         => _x( 'Category', 'Taxonomy singular name', 'dojocon-japan' ),
		'search_items'          => __( 'Search Categories', 'dojocon-japan' ),
		'popular_items'         => __( 'Popular Categories', 'dojocon-japan' ),
		'all_items'             => __( 'All Categories', 'dojocon-japan' ),
		'parent_item'           => __( 'Parent Category', 'dojocon-japan' ),
		'parent_item_colon'     => __( 'Parent Category', 'dojocon-japan' ),
		'edit_item'             => __( 'Edit Category', 'dojocon-japan' ),
		'update_item'           => __( 'Update Category', 'dojocon-japan' ),
		'add_new_item'          => __( 'Add New Category', 'dojocon-japan' ),
		'new_item_name'         => __( 'New Category Name', 'dojocon-japan' ),
		'add_or_remove_items'   => __( 'Add or remove Categories', 'dojocon-japan' ),
		'choose_from_most_used' => __( 'Choose from most used dojocon-japan', 'dojocon-japan' ),
		'menu_name'             => __( 'Category', 'dojocon-japan' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'session-category', array( 'session' ), $args );
}
add_action( 'init', 'dojoconjapan_custom_post_types' );
