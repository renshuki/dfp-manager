<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://fcbrossard.net/
 * @since      1.0.0
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/public
 *
 */
class Dfp_Manager_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dfp-manager-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dfp-manager-public.js', array( 'jquery' ), $this->version, false );

	}

	public function responsive_ads_header() {
    $args = array(
      'post_type' => 'ad_slot'
    );
    $ad_slots = get_posts($args);
    $general_options = get_option('dfp_manager_general_settings');
    $advanced_options = get_option('dfp_manager_advanced_settings');

    echo("
    	<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
      <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
      </script>
    ");

    echo("
      <script>
        googletag.cmd.push(function() {
    "); 

    foreach ($ad_slots as $ad_slot) {
      echo("googletag.defineSlot('/".$general_options['network_code']."/".$advanced_options['ad_units_prefix'].get_the_ID()."_".get_post_type()."_".($ad_slot->post_title)."', [[500, 500], [100, 45]], 'div-gpt-ad-1504076387237-0').addService(googletag.pubads());\n");
    }

    echo("
          googletag.pubads().enableSyncRendering();
          googletag.pubads().enableSingleRequest();
          googletag.pubads().collapseEmptyDivs();
          googletag.enableServices();
        });
      </script>
    ");
  }

}
