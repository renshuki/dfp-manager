<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://fcbrossard.net/
 * @since      1.0.0
 *
 * @package    Dfp_Manager
 */

class Dfp_Manager_Uninstaller {

  /**
   * Short Description. (use period)
   *
   * Long Description.
   *
   * @since    1.0.0
   */
  public static function uninstall() {

    $uninstaller = new Dfp_Manager_Uninstaller();

    // Declare the options
    $general_settings  = 'dfp_manager_general_settings';
    $advanced_settings = 'dfp_manager_advanced_settings';

    // Delete the options
    delete_option($general_settings);
    delete_option($advanced_settings);

    // Delete ad_slot custom post type
    $uninstaller->delete_custom_post_type('ad_slot');

    // Delete ad_size custom taxonomy
    $uninstaller->delete_custom_taxonomy('ad_size');

    // Delete upload folder (including DFP keys)
    $uninstaller->delete_upload_folder( constant("UPLOAD_FOLDER") );

  }

  /* Functions */
  function delete_custom_post_type($post_type) {
    $args = array (
      'post_type' => $post_type,
      'nopaging' => true
    );
    $query = new WP_Query($args);

    while ($query->have_posts()) {
      $query->the_post();
      $id = get_the_ID();
      wp_delete_post($id, true);
    }
    
    wp_reset_postdata();
  }

  function delete_custom_taxonomy($taxonomy) {

  }

  function delete_upload_folder($folder_name) {
    $upload_dir = wp_upload_dir(null, false);
    $dfp_manager_dirname = $upload_dir['basedir'].'/'. $folder_name;

    if ( file_exists( $dfp_manager_dirname ) ) {
      foreach (glob($dfp_manager_dirname."/{,.}*", GLOB_BRACE) as $filename) {
        if (is_file($filename)) {
          unlink($filename);
        }
      }
      rmdir($dfp_manager_dirname);
    }
  }
}