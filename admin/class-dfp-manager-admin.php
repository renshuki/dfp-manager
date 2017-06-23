<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://fcbrossard.net/
 * @since      1.0.0
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/admin
 *
 */
class Dfp_Manager_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;
  private $plugin_title;

  /**    
   * The version of this plugin. 
   *    
   * @since    1.0.0    
   * @access private    
   * @var      string $version    The current version of this plugin.
  */   
  private $version;

  protected $views = array();

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $plugin_title, $version ) {

		$this->plugin_name = $plugin_name;
    $this->plugin_title = $plugin_title;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dfp_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dfp_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dfp-manager-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dfp_Manager_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dfp_Manager_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dfp-manager-admin.js', array( 'jquery' ), $this->version, true );

	}

	public function init() {

		//###########################
		#                           #
		#     General Settings      #   
		#														#
		###########################//

		// DFP
		register_setting( 'dfp_manager_general_settings', 'network_code' );
		register_setting( 'dfp_manager_general_settings', 'application_name' );
		register_setting( 'dfp_manager_general_settings', 'endpoint' );

		// OAUTH2
		register_setting( 'dfp_manager_general_settings', 'api_key' );
		register_setting( 'dfp_manager_general_settings', 'scopes' );
		register_setting( 'dfp_manager_general_settings', 'impersonated_email' );
		register_setting( 'dfp_manager_general_settings', 'installedapp_or_webapp');
		register_setting( 'dfp_manager_general_settings', 'client_id');
		register_setting( 'dfp_manager_general_settings', 'client_secret');
		register_setting( 'dfp_manager_general_settings', 'refresh_token');

		// SOAP
		register_setting( 'dfp_manager_general_settings', 'compression_level');
		register_setting( 'dfp_manager_general_settings', 'wsdl_cache');

		// PROXY
		register_setting( 'dfp_manager_general_settings', 'proxy_host');
		register_setting( 'dfp_manager_general_settings', 'proxy_port');
		register_setting( 'dfp_manager_general_settings', 'proxy_user');
		register_setting( 'dfp_manager_general_settings', 'proxy_password');

		// LOGGING
		register_setting( 'dfp_manager_general_settings', 'log_path');
		register_setting( 'dfp_manager_general_settings', 'log_level');
		register_setting( 'dfp_manager_general_settings', 'rd_log_path');
		register_setting( 'dfp_manager_general_settings', 'rd_log_level');

		//###########################
		#                           #
		#     Advanced Settings     #   
		#														#
		###########################//

		register_setting( 'dfp_manager_advanced_settings', 'ad_units_prefix' );
		register_setting( 'dfp_manager_advanced_settings', 'ad_units_include_post_type' );

	}

	public function load_view() {
		$current_views = $this->views[current_filter()];
		include(plugin_dir_path(__FILE__) . 'partials/'.$current_views.'.php');
	}

	public function menus() {
		$view_top = add_menu_page( 'DFP Manager', 'DFP Manager', 'manage_options', 'dfp-manager-admin-top', array(&$this, 'load_view'));
		$this->views[$view_top] = 'dfp-manager-admin-general';

		$view_general = add_submenu_page('dfp-manager-admin-top', 'General', 'General', 'manage_options', 'dfp-manager-admin-general', array(&$this, 'load_view'));
		$this->views[$view_general] = 'dfp-manager-admin-general';

		$view_general = add_submenu_page('dfp-manager-admin-top', 'Ad Slots', 'Ad Slots', 'manage_options', 'dfp-manager-admin-adslots', array(&$this, 'load_view'));
		$this->views[$view_general] = 'dfp-manager-admin-adslots';		

		$view_advanced = add_submenu_page('dfp-manager-admin-top', 'Advanced', 'Advanced', 'manage_options', 'dfp-manager-admin-advanced', array(&$this, 'load_view'));
		$this->views[$view_advanced] = 'dfp-manager-admin-advanced';

		remove_submenu_page('dfp-manager-admin-top', 'dfp-manager-admin-top');
	}

}
