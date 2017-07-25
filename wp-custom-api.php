<?php

/**
 * Wp Custom API bootstrap file
 *
 * @link              https://github.com/RiFi2k/wp-custom-api
 * @since             1.0.0
 * @package           Wp_Custom_Api
 *
 * @wordpress-plugin
 * Plugin Name:       WP Custom API
 * Plugin URI:        https://github.com/RiFi2k/wp-custom-api
 * Description:       Setup a custom API on your WordPress site.
 * Version:           1.0.0
 * Author:            Reilly Lowery
 * Author URI:        https://github.com/RiFi2k
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-custom-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-custom-api-activator.php
 */
function activate_wp_custom_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-api-activator.php';
	Wp_Custom_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-custom-api-deactivator.php
 */
function deactivate_wp_custom_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-api-deactivator.php';
	Wp_Custom_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_custom_api' );
register_deactivation_hook( __FILE__, 'deactivate_wp_custom_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-custom-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_custom_api() {

	$plugin = new Wp_Custom_Api();
	$plugin->run();

}
run_wp_custom_api();
