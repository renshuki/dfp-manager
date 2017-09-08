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

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Declare the options
$general_settings  = 'dfp_manager_general_settings';
$advanced_settings = 'dfp_manager_advanced_settings';

// Delete the options
delete_option($general_settings);
delete_option($advanced_settings);

// Delete ad_slot custom post type
delete_custom_post_type('ad_slot');

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