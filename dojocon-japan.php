<?php
/*
Plugin Name: DojoCon Japan
Plugin URI: http://dojocon.coderdojo.jp/
Descript: DojoCon Japan must-use plugin
Version: 1.0.0
Author: Kite
Author URI: https://profiles.wordpress.org/ixkaito
License: GPLv2 or later
Text Domain: dojocon-japan
*/

define( 'DOJOCONJAPAN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! function_exists( 'dojoconjapan_plugin_setup' ) ) {
/**
 * Plugin set up
 */
function dojoconjapan_plugin_setup() {
	add_image_size( 'speaker-avatar', 400, 400, true );
}

}
add_action( 'after_setup_theme', 'dojoconjapan_plugin_setup' );

/**
 * Register post types
 */
/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function dojoconjapan_custom_post_types() {

	$labels = array(
		'name'                => __( 'Speakers', 'dojocon-japan' ),
		'singular_name'       => __( 'Speaker', 'dojocon-japan' ),
		'add_new'             => _x( 'Add New Speaker', 'dojocon-japan', 'dojocon-japan' ),
		'add_new_item'        => __( 'Add New Speaker', 'dojocon-japan' ),
		'edit_item'           => __( 'Edit Speaker', 'dojocon-japan' ),
		'new_item'            => __( 'New Speaker', 'dojocon-japan' ),
		'view_item'           => __( 'View Speaker', 'dojocon-japan' ),
		'search_items'        => __( 'Search Speakers', 'dojocon-japan' ),
		'not_found'           => __( 'No Speakers found', 'dojocon-japan' ),
		'not_found_in_trash'  => __( 'No Speakers found in Trash', 'dojocon-japan' ),
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
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats'
		),
	);

	register_post_type( 'speaker', $args );
}
add_action( 'init', 'dojoconjapan_custom_post_types' );
