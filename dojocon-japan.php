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

require_once DOJOCONJAPAN_PLUGIN_DIR . '/custom-post-types-taxonomies.php';

if ( ! function_exists( 'dojoconjapan_plugin_setup' ) ) {
/**
 * Plugin set up
 */
function dojoconjapan_plugin_setup() {
	load_theme_textdomain( 'dojocon-japan', DOJOCONJAPAN_PLUGIN_DIR . '/languages' );

	add_image_size( 'speaker-avatar', 400, 400, true );
	add_image_size( 'sponsor-logo', 640, 480, true );
	add_image_size( 'workshop-post-thumbnail', 600, 400, true );
	add_image_size( 'staff-avatar', 200, 200, true );
}

}
add_action( 'after_setup_theme', 'dojoconjapan_plugin_setup' );
