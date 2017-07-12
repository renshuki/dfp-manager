<?php

/**
 * Fired during plugin activation
 *
 * @link       https://fcbrossard.net/
 * @since      1.0.0
 *
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Dfp_Manager
 * @subpackage Dfp_Manager/includes
 *
 */
class Dfp_Manager_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
    $activator = new Dfp_Manager_Activator();

    // Create upload folder for JSON keys
    $activator->create_upload_folder(constant("UPLOAD_FOLDER"));
	}

  function create_upload_folder($folder_name) {
    $upload_dir = wp_upload_dir(null, false);
    $dfp_manager_dirname = $upload_dir['basedir'].'/'. $folder_name;

    if ( ! file_exists( $dfp_manager_dirname ) ) {
        wp_mkdir_p( $dfp_manager_dirname );
    }
  }

}
