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

		// DFP
		register_setting( 'dfp_manager_general_settings', 'network_code' );
		register_setting( 'dfp_manager_general_settings', 'application_name' );
		register_setting( 'dfp_manager_general_settings', 'endpoint' );

		// OAUTH2
		register_setting( 'dfp_manager_general_settings', 'api_key', 'validate_setting');
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

  function validate_setting($dfp_manager_general_settings) { 
    $keys = array_keys($_FILES); $i = 0; foreach ( $_FILES as $image ) {
      // if a files was upload   
      if ($image['size']) {     
        // if it is an image     
        if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {       
          $override = array('test_form' => false);       
          // save the file, and store an array, containing its location in $file       
          $file = wp_handle_upload( $image, $override );       
          $dfp_manager_general_settings[$keys[$i]] = $file['url'];     
        } 
        else {       
          // Not an image.        
          $options = get_option('api_key');       
          $dfp_manager_general_settings[$keys[$i]] = $options[$logo];       
          // Die and let the user know that they made a mistake.       
          wp_die('No image was uploaded.');     
        }   
      }   
      // Else, the user didn't upload a file.   
      // Retain the image that's already on file.   
      else {     
        $options = get_option('api_key');     
        $dfp_manager_general_settings[$keys[$i]] = $options[$keys[$i]];   
      }   
      $i++;
    } 
    return $dfp_manager_general_settings;
  }

}
