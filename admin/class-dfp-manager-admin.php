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
    #     Ad Slots Settings     #   
    #                           #
    ###########################//

    $labels = array(
      'name' => 'Ad Slots',
      'singular_name' => 'Ad Slot',
      'add_new' => 'Add new',
      'add_new_item' => 'New Ad Slot',
      'edit_item' => 'Edit Ad Slot',
      'new_item' => 'New Ad Slot',
      'all_items' => 'All Ad Slots',
      'view_item' => 'View Ad Slot',
      'search_item' => 'Search Ad Slots',
      'not_found' => 'No ad slot found',
      'not_found_in_trash' => 'No ad slot found in Trash',
      'parent_item_colon' => '',
      'menu_name' => 'Ad Slots'
    );



    $args = array(
      'labels' => $labels,
      'public' => false,
      'publicly_queryable' => false,
      'show_ui' => true,
      'show_in_menu' => false,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'ad-slot' ),
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array( 'title' )
      );

    register_post_type( 'ad-slot', $args );


		//###########################
		#                           #
		#     General Settings      #   
		#														#
		###########################//

    register_setting( 'dfp_manager_general_settings', 'dfp_manager_general_settings', 'validate_settings');

    add_settings_section('dfp_section', 'DFP', array( $this , 'dfp_section' ), 'dfp_section');
    add_settings_section('oauth_section', 'OAUTH2', 'oauth_section', 'oauth_section');
    add_settings_section('soap_section', 'SOAP', 'soap_section', 'soap_section');
    add_settings_section('proxy_section', 'PROXY', 'proxy_section', 'proxy_section');
    add_settings_section('logging_section', 'LOGGING', 'logging_section', 'logging_section');

		// DFP
    add_settings_field('network_code', 'Network Code', array( $this , 'network_code_setting' ), 'dfp_section', 'dfp_section');
    add_settings_field('application_name', 'Application Name', array( $this , 'application_name_setting' ), 'dfp_section', 'dfp_section');
    add_settings_field('endpoint', 'Endpoint', array( $this , 'endpoint_setting' ), 'dfp_section', 'dfp_section');

		// OAUTH2
    add_settings_field('api_key', 'JSON API Key', 'api_key_setting', 'oauth_section', 'oauth_section');
    add_settings_field('scopes', 'Scopes', 'scopes_setting', 'oauth_section', 'oauth_section');
    add_settings_field('impersonated_email', 'Impersonated Email', 'impersonated_email_setting', 'oauth_section', 'oauth_section');
    add_settings_field('installedapp_or_webapp', 'Installed App or Web App', 'installedapp_or_webapp_setting', 'oauth_section', 'oauth_section');
    add_settings_field('client_id', 'Client ID', 'client_id_setting', 'oauth_section', 'oauth_section');
    add_settings_field('client_secret', 'Client Secret', 'client_secret_setting', 'oauth_section', 'oauth_section');
    add_settings_field('refresh_token', 'Refresh Token', 'refresh_token_setting', 'oauth_section', 'oauth_section');

		// SOAP
    add_settings_field('compression_level', 'Compression Level', 'compression_level_setting', 'soap_section', 'soap_section');
    add_settings_field('wsdl_cache', 'WSDL Cache', 'wsdl_cache_setting', 'soap_section', 'soap_section');

		// PROXY
    add_settings_field('proxy_host', 'Host', 'proxy_host_setting', 'proxy_section', 'proxy_section');
    add_settings_field('proxy_port', 'Port', 'proxy_port_setting', 'proxy_section', 'proxy_section');
    add_settings_field('proxy_user', 'User', 'proxy_user_setting', 'proxy_section', 'proxy_section');
    add_settings_field('proxy_password', 'Password', 'proxy_password_setting', 'proxy_section', 'proxy_section');

		// LOGGING
    add_settings_field('log_path', 'Log Path', 'log_path_setting', 'logging_section', 'logging_section');
    add_settings_field('log_level', 'Log Level', 'log_level_setting', 'logging_section', 'logging_section');
    add_settings_field('rd_log_path', 'RD Log Path', 'rd_log_path_setting', 'logging_section', 'logging_section');
    add_settings_field('rd_log_level', 'RD Log Level', 'rd_log_level_setting', 'logging_section', 'logging_section');

		//###########################
		#                           #
		#     Advanced Settings     #   
		#														#
		###########################//

    register_setting( 'dfp_manager_general_settings', 'dfp_manager_general_settings');

    add_settings_section('ad_units_section', 'DFP', 'ad_units_section', 'ad_units_section');

    add_settings_field('ad_units_prefix', 'Ad Units Prefix', 'ad_units_prefix_setting', 'ad_units_section', 'ad_units_section');
    add_settings_field('ad_units_include_post_type', 'Include "Post type"', 'ad_units_include_post_type_setting', 'ad_units_section', 'ad_units_section');
	}

	public function load_view() {
		$current_views = $this->views[current_filter()];
		include(plugin_dir_path(__FILE__) . 'partials/'.$current_views.'.php');
	}

	public function custom_post() {

    add_menu_page( 'DFP Manager', 'DFP Manager', 'manage_options', 'admin.php?post_type=ad-slot', NULL );
    add_submenu_page( 'admin.php?post_type=ad-slot', 'Ad Slots', 'Ad Slots', 'manage_options', 'edit.php?post_type=ad-slot', NULL);
    add_submenu_page( 'admin.php?post_type=ad-slot', 'New Ad Slot', 'New Ad Slot', 'manage_options', 'post-new.php?post_type=ad-slot', NULL );

		remove_submenu_page('admin.php?post_type=ad-slot', 'admin.php?post_type=ad-slot');
	}

  public function settings() {
    $view_general = add_submenu_page('admin.php?post_type=ad-slot', 'General', 'General Settings', 'manage_options', 'general-settings', array(&$this, 'load_view'));
    $this->views[$view_general] = 'dfp-manager-admin-general';

    $view_advanced = add_submenu_page('admin.php?post_type=ad-slot', 'Advanced', 'Advanced Settings', 'manage_options', 'advanced-settings', array(&$this, 'load_view'));
    $this->views[$view_advanced] = 'dfp-manager-admin-advanced';
  }

  public function custom_publish_metabox() {
    $mg_post_type = 'ad-slot';
    global $post;

    if(isset($post->post_type) == $mg_post_type){
      echo "
        <style type='text/css'>
          #misc-publishing-actions,
          #minor-publishing-actions {
            display:none;
          }
        </style>
      ";
    }
  }

  //### Sections ###//
  function dfp_section() {
    echo '<p>Required DFP API properties. <br/>Details can be found at: <a href="https://developers.google.com/doubleclick-publishers/docs/soap_xml">https://developers.google.com/doubleclick-publishers/docs/soap_xml</a></p>';
  }

  function oauth_section() {}
  function soap_section() {}
  function proxy_section() {}
  function logging_section() {}

  function adunits_section() {}

  //### Fields ###//

  // DFP
  function network_code_setting() {
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[network_code]' type='text' class='regular-text' value='{$options['network_code']}' />";
  }

  function application_name_setting() {
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[application_name]' type='text' class='regular-text' value='{$options['application_name']}' />";
  }

  function endpoint_setting() {
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[endpoint_setting]' type='text' class='regular-text' value='{$options['endpoint_setting']}' />";
  }

  //

  function validate_setting($dfp_manager_general_settings) { 
    $keys = array_keys($_FILES); $i = 0; foreach ( $_FILES as $json ) {
      // if a files was upload   
      if ($json['size']) {     
        // if it is a json     
        if ( preg_match('/(jpg|jpeg|png|gif)$/', $json['type']) ) {       
          $override = array('test_form' => false);       
          // save the file, and store an array, containing its location in $file       
          $file = wp_handle_upload( $json, $override );       
          $dfp_manager_general_settings[$keys[$i]] = $file['url'];     
        } 
        else {       
          // Not a json.        
          $options = get_option('api_key');       
          $dfp_manager_general_settings[$keys[$i]] = $options[$logo];       
          // Die and let the user know that they made a mistake.       
          wp_die('No json was uploaded.');     
        }   
      }   
      // Else, the user didn't upload a file.   
      // Retain the json that's already on file.   
      else {     
        $options = get_option('api_key');     
        $dfp_manager_general_settings[$keys[$i]] = $options[$keys[$i]];   
      }   
      $i++;
    } 
    return $dfp_manager_general_settings;
  }

}
