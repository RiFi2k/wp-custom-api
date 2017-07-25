<?php

/**
 * The global functionality of the plugin.
 *
 * @link       https://github.com/RiFi2k/wp-custom-api
 * @since      1.0.0
 *
 * @package    Wp_Custom_Api
 * @subpackage Wp_Custom_Api/global
 */

/**
 * The global functionality of the plugin.
 *
 * Defines the global functions.
 *
 * @package    Wp_Custom_Api
 * @subpackage Wp_Custom_Api/global
 * @author     Reilly Lowery <reilly@reillylowery.io>
 */
class Wp_Custom_Api_Global {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Filter all wp-json api calls.
	 *
	 * @since    1.0.0
	 * @param    $access
	 */
	public function api_filter( $access ) {

		//$request_uri = strtok( $_SERVER["REQUEST_URI"], '?' );

		//if ( $request_uri == '/wp-json/custom-api/v1/' ) {
        //	return $access;
    	//}

    	//return new WP_Error( 'api_access_denied', __( 'REST API access is denied.', 'wp-custom-api' ), array( 'status' => rest_authorization_required_code() ) );

		return $access;

	}

}
