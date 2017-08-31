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

    $ad_slot_labels = array(
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



    $ad_slot_args = array(
      'labels' => $ad_slot_labels,
      'public' => false,
      'publicly_queryable' => false,
      'show_ui' => true,
      'show_in_menu' => false,
      'show_in_admin_bar' => true,
      'show_in_nav_menus' => true,
      'can_export' => true,
      'query_var' => true,
      //'rewrite' => array( 'slug' => 'ad_slot' ),
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array( 'title' ),
      'taxonomies' => array( 'ad_size' )
      );

    register_post_type( 'ad_slot', $ad_slot_args );


    //###########################
    #                           #
    #     Ad Size Settings      #   
    #                           #
    ###########################//

    $ad_size_labels = array(
      'name' => 'Ad Sizes',
      'singular_name' => 'Ad Size',
      'search_items' => 'Search Ad Size',
      'all_items' => 'All Ad Sizes',
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => 'Edit Ad Size',
      'update_item' => 'Update Ad Size',
      'add_new_item' => 'Add new Ad Size',
      'new_item_name' => 'New Ad Size Name',
      'menu_name' => 'Ad Sizes'
    );

    $ad_size_args = array(
      'hierarchical' => false,
      'labels' => $ad_size_labels,
      'public' => true,
      'query_var' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'ad_size' ),
    );

    register_taxonomy( 'ad_size', 'ad_slot', $ad_size_args );


		//###########################
		#                           #
		#     General Settings      #   
		#														#
		###########################//

    register_setting( 'dfp_manager_general_settings', 'dfp_manager_general_settings', array( $this , 'upload_setting' ));

    add_settings_section('dfp_section', 'DFP', array( $this , 'dfp_section' ), 'dfp_section');
    add_settings_section('oauth_section', 'OAUTH2', array( $this , 'oauth_section' ), 'oauth_section');
    add_settings_section('soap_section', 'SOAP', array( $this , 'soap_section' ), 'soap_section');
    add_settings_section('proxy_section', 'PROXY', array( $this , 'proxy_section' ), 'proxy_section');
    add_settings_section('logging_section', 'LOGGING', array( $this , 'logging_section' ), 'logging_section');

		// DFP
    add_settings_field('network_code', 'Network Code', array( $this , 'network_code_setting' ), 'dfp_section', 'dfp_section');
    add_settings_field('application_name', 'Application Name', array( $this , 'application_name_setting' ), 'dfp_section', 'dfp_section');
    add_settings_field('endpoint', 'Endpoint', array( $this , 'endpoint_setting' ), 'dfp_section', 'dfp_section');

		// OAUTH2
    add_settings_field('api_key', 'JSON API Key', array( $this , 'api_key_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('scopes', 'Scopes', array( $this , 'scopes_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('impersonated_email', 'Impersonated Email', array( $this , 'impersonated_email_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('installedapp_or_webapp', 'Installed Application or Web Application flow', array( $this , 'installedapp_or_webapp_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('client_id', 'Client ID', array( $this , 'client_id_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('client_secret', 'Client Secret', array( $this , 'client_secret_setting' ), 'oauth_section', 'oauth_section');
    add_settings_field('refresh_token', 'Refresh Token', array( $this , 'refresh_token_setting' ), 'oauth_section', 'oauth_section');

		// SOAP
    add_settings_field('compression_level', 'Compression Level', array( $this , 'compression_level_setting' ), 'soap_section', 'soap_section');
    add_settings_field('wsdl_cache', 'WSDL Cache', array( $this , 'wsdl_cache_setting' ), 'soap_section', 'soap_section');

		// PROXY
    add_settings_field('proxy_host', 'Host', array( $this , 'proxy_host_setting' ), 'proxy_section', 'proxy_section');
    add_settings_field('proxy_port', 'Port', array( $this , 'proxy_port_setting' ), 'proxy_section', 'proxy_section');
    add_settings_field('proxy_user', 'User', array( $this , 'proxy_user_setting' ), 'proxy_section', 'proxy_section');
    add_settings_field('proxy_password', 'Password', array( $this , 'proxy_password_setting' ), 'proxy_section', 'proxy_section');

		// LOGGING
    add_settings_field('log_path', 'Log Path', array( $this , 'log_path_setting' ), 'logging_section', 'logging_section');
    add_settings_field('log_level', 'Log Level', array( $this , 'log_level_setting' ), 'logging_section', 'logging_section');
    add_settings_field('rd_log_path', 'Report Downloader Log Path', array( $this , 'rd_log_path_setting' ), 'logging_section', 'logging_section');
    add_settings_field('rd_log_level', 'Report Downloader Log Level', array( $this , 'rd_log_level_setting' ), 'logging_section', 'logging_section');

		//###########################
		#                           #
		#     Advanced Settings     #   
		#														#
		###########################//

    register_setting( 'dfp_manager_advanced_settings', 'dfp_manager_advanced_settings');

    add_settings_section('adunits_section', 'Ad Units Code', array( $this , 'adunits_section' ), 'adunits_section');

    add_settings_field('ad_units_prefix', 'Ad Units Prefix', array( $this , 'ad_units_prefix_setting' ), 'adunits_section', 'adunits_section');
    add_settings_field('ad_units_include_post_type', 'Include "Post type"', array( $this , 'ad_units_include_post_type_setting' ), 'adunits_section', 'adunits_section');
    add_settings_field('ad_units_result', 'Result', array( $this , 'ad_units_result_setting' ), 'adunits_section', 'adunits_section');
	}

	public function load_view() {
		$current_views = $this->views[current_filter()];
		include(plugin_dir_path(__FILE__) . 'partials/'.$current_views.'.php');
	}

	public function custom_post() {

    add_menu_page( 'DFP Manager', 'DFP Manager', 'manage_options', 'ad_slot', NULL );
    add_submenu_page( 'ad_slot', 'Ad Slots', 'Ad Slots', 'manage_options', 'edit.php?post_type=ad_slot', NULL);
    add_submenu_page( 'ad_slot', 'New Ad Slot', 'New Ad Slot', 'manage_options', 'post-new.php?post_type=ad_slot', NULL );

		remove_submenu_page('ad_slot', 'ad_slot');
	}

  public function custom_taxonomy() {
    add_submenu_page( 'ad_slot', 'Ad Sizes', 'Ad Sizes', 'manage_options', 'edit-tags.php?taxonomy=ad_size&post_type=ad_slot', NULL);
  }

  public function settings() {
    $view_general = add_submenu_page('ad_slot', 'General', 'General Settings', 'manage_options', 'general-settings', array(&$this, 'load_view'));
    $this->views[$view_general] = 'dfp-manager-admin-general';

    $view_advanced = add_submenu_page('ad_slot', 'Advanced', 'Advanced Settings', 'manage_options', 'advanced-settings', array(&$this, 'load_view'));
    $this->views[$view_advanced] = 'dfp-manager-admin-advanced';
  }

  public function custom_publish_metabox() {
    $mg_post_type = 'ad_slot';
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

  function set_current_menu( $parent_file ) {
    global $submenu_file, $current_screen, $pagenow;

    # Set the submenu as active/current while anywhere in your Custom Post Type (nwcm_news)
    if ( $current_screen->post_type == 'ad_slot' ) {
      if ( $pagenow == 'post.php' ) {
        $submenu_file = 'edit.php?post_type=' . $current_screen->post_type;
      }
      if ( $pagenow == 'edit-tags.php' ) {
        $submenu_file = 'edit-tags.php?taxonomy=ad_size&post_type=' . $current_screen->post_type;
      }
      $parent_file = 'ad_slot';
    }
    return $parent_file;
  }

  //###########################
  #                           #
  #    Sections Callbacks     #   
  #                           #
  ###########################//

  function dfp_section() {
    echo '<p>Required DFP API properties. <br/>Details can be found at: <a href="https://developers.google.com/doubleclick-publishers/docs/soap_xml">https://developers.google.com/doubleclick-publishers/docs/soap_xml</a></p>';
  }

  function oauth_section() {
    echo '<p>Required OAuth2 credentials. <br/>See the README for guidance: <a href="https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started">https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started</a></p>';
  }

  function soap_section() {
    echo '<p>Optional SOAP settings. See SoapSettingsBuilder.php for more information.</p>';
  }

  function proxy_section() {
    echo '<p>Optional proxy settings to be used by SOAP requests.</p>';
  }

  function logging_section() {
    echo '<p>Optional logging settings.</p>';
  }

  function adunits_section() {
    echo '<p>Custom you ad unit code.</p>';
  }

  //###########################
  #                           #
  #     Fields Callbacks      #   
  #                           #
  ###########################//

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
    echo "<input name='dfp_manager_general_settings[endpoint]' type='text' class='regular-text' value='{$options['endpoint']}' />";
  }

  // OAUTH2
  function api_key_setting() {
    $options = get_option('dfp_manager_general_settings');
    echo "<input type='file' name='api_key'  />";
    echo "<div><strong>Current file:</strong> {$options['api_key']}</div>";
  }

  function scopes_setting() {
    $options = get_option('dfp_manager_general_settings');
    $value = !empty($options['scopes']) ? $options['scopes'] : 'https://www.googleapis.com/auth/dfp';
    echo "<input name='dfp_manager_general_settings[scopes]' type='text' class='regular-text' value='{$value}' />";
  }

  function impersonated_email_setting() {
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[impersonated_email]' type='text' class='regular-text' value='{$options['impersonated_email']}' />";
  }

  function installedapp_or_webapp_setting(){
    $options = get_option('dfp_manager_general_settings');
    $checked = (isset($options['installedapp_or_webapp']) == 1) ? "checked = 'checked'" : "";
    echo "<input type='checkbox' name='dfp_manager_general_settings[installedapp_or_webapp]' value='1' {$checked} />";
  }

  function client_id_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[client_id]' type='text' class='regular-text' value='{$options['client_id']}' />";
  }

  function client_secret_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[client_secret]' type='text' class='regular-text' value='{$options['client_secret']}' />";
  }
  function refresh_token_setting(){
   $options = get_option('dfp_manager_general_settings');
   echo "<input name='dfp_manager_general_settings[refresh_token]' type='text' class='regular-text' value='{$options['refresh_token']}' />"; 
  }

  // SOAP
  function compression_level_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[compression_level]' type='text' class='regular-text' value='{$options['compression_level']}' />";
  }

  function wsdl_cache_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[wsdl_cache]' type='text' class='regular-text' value='{$options['wsdl_cache']}' />"; 
  }

  // PROXY
  function proxy_host_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[proxy_host]' type='text' class='regular-text' value='{$options['proxy_host']}' />"; 
  }

  function proxy_port_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[proxy_port]' type='text' class='regular-text' value='{$options['proxy_port']}' />"; 
  }

  function proxy_user_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[proxy_user]' type='text' class='regular-text' value='{$options['proxy_user']}' />"; 
  }

  function proxy_password_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[proxy_password]' type='text' class='regular-text' value='{$options['proxy_password']}' />"; 
  }

  // LOGGING
  function log_path_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[log_path]' type='text' class='regular-text' value='{$options['log_path']}' />"; 
  }

  function log_level_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[log_level]' type='text' class='regular-text' value='{$options['log_level']}' />";
  }

  function rd_log_path_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[rd_log_path]' type='text' class='regular-text' value='{$options['rd_log_path']}' />"; 
  }

  function rd_log_level_setting(){
    $options = get_option('dfp_manager_general_settings');
    echo "<input name='dfp_manager_general_settings[rd_log_level]' type='text' class='regular-text' value='{$options['rd_log_level']}' />";  
  }

  // ADVANCED SETTINGS

  function ad_units_prefix_setting(){
    $options = get_option('dfp_manager_advanced_settings');
    echo "<input name='dfp_manager_advanced_settings[ad_units_prefix]' type='text' class='small-text' value='{$options['ad_units_prefix']}' />";  
  }

  function ad_units_include_post_type_setting(){
    $options = get_option('dfp_manager_advanced_settings');
    $checked = (isset($options['ad_units_include_post_type']) == 1) ? "checked = 'checked'" : "";
    echo "<input type='checkbox' name='dfp_manager_advanced_settings[ad_units_include_post_type]' value='1' {$checked} />";
  }

  function ad_units_result_setting(){
    $options = get_option('dfp_manager_advanced_settings');
    $ad_units_prefix = $options['ad_units_prefix'];
    $ad_units_include_post_type = $options['ad_units_include_post_type'];

    $latest_post = get_posts(array('numberposts' => 1));
    $prefix      = isset($ad_units_prefix) ? esc_attr($ad_units_prefix) : '';
    $post_id     = $latest_post[0]->ID;
    $post_type   = !empty($ad_units_include_post_type) ? '_'.$latest_post[0]->post_type : '';

    echo($prefix . $post_id . $post_type);
    echo "<p class='description'>(This is an example where post_id is {$post_id})</p>";
  }

  //###########################
  #                           #
  #      Upload Callback      #   
  #                           #
  ###########################//

  function upload_setting($dfp_manager_general_settings) { 
    
    $keys = array_keys($_FILES); 
    $i = 0; 

    foreach ( $_FILES as $json ) {
      $content = file_get_contents($json['tmp_name']);
      $decoded_json = json_decode($content, true);
      // if a files was upload   
      if ($json['size']) {     
        // if it is a json
        if ( $decoded_json != null ) {       
          $override = array('test_form' => false);       
          // save the file, and store an array, containing its location in $file       
          add_filter('upload_dir', array($this, 'custom_upload_dir'));
          $file = wp_handle_upload( $json, $override );
          $dfp_manager_general_settings[$keys[$i]] = $file['file'];     
          remove_filter('upload_dir', array($this, 'custom_upload_dir'));
        } 
        else {       
          // Not a json.        
          $options = get_option('dfp_manager_general_settings');       
          $dfp_manager_general_settings[$keys[$i]] = "";       
          // Die and let the user know that they made a mistake.     
          wp_die('No JSON uploaded.');     
        }   
      }   
      // Else, the user didn't upload a file.   
      // Retain the json that's already on file.   
      else {     
        $options = get_option('dfp_manager_general_settings');     
        $dfp_manager_general_settings[$keys[$i]] = $options[$keys[$i]];   
      }   
      $i++;
    } 
    return $dfp_manager_general_settings;
  }

  function custom_upload_dir($upload) {
    $upload['subdir'] = '/' . constant("UPLOAD_FOLDER");
    $upload['path']   = $upload['basedir'] . $upload['subdir'];
    $upload['url']    = $upload['baseurl'] . $upload['subdir'];

    return $upload;
  }

  public function custom_mime_types($mime_types) {
    $mime_types['json'] = 'application/json'; // Adding .json extension
    return $mime_types;
  }
}
