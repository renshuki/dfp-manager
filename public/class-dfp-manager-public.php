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

	public function register_ad_slot() {

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
	}

	public function register_ad_size() {

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
	}

	public function responsive_ads_header() {
	  $args = array(
	    'post_type' => 'ad_slot'
	  );
	  $ad_slots = get_posts($args);
	  $general_options = get_option('dfp_manager_general_settings');
	  $advanced_options = get_option('dfp_manager_advanced_settings');

	  $network_code = $general_options['network_code'];
	  $ad_unit_prefix = $advanced_options['ad_units_prefix'];

	  $id = get_the_ID();
	  if ($advanced_options['ad_units_include_post_type'] == 1) {
	  	$post_type = get_post_type()."_";
	  } else {
	  	$post_type = "";
	  }

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
	    $terms = wp_get_post_terms($ad_slot->ID, 'ad_size');
	    $ad_sizes = [];

	    foreach ($terms as $term) {
	      if( strpos($term->slug, 'x') !== false ){
	        $ar_term = explode('x', $term->slug);
	        $width = (int)$ar_term[0];
	        $height = (int)$ar_term[1];
	        $ad_size = array($width, $height);

	        array_push($ad_sizes, $ad_size);
	      }
	    }

	    echo("googletag.defineSlot('/".$network_code."/".$ad_unit_prefix.$id."_".$post_type.($ad_slot->post_title)."', ". json_encode($ad_sizes) .", '".$advanced_options['ad_slots_prefix'].($ad_slot->post_title)."').addService(googletag.pubads());\n");
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
