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
    $activator->create_htaccess_file(constant("UPLOAD_FOLDER"));
	}

  function create_upload_folder($folder_name) {
    $upload_dir = wp_upload_dir(null, false);
    $dfp_manager_dirname = $upload_dir['basedir'].'/'. $folder_name;

    if ( ! file_exists( $dfp_manager_dirname ) ) {
        wp_mkdir_p( $dfp_manager_dirname );
    }
  }

  function create_htaccess_file($folder_name) {
    $filename = ".htaccess";
    $upload_dir = wp_upload_dir(null, false);
    $dfp_manager_dirname = $upload_dir['basedir'].'/'. $folder_name;
    $file_path = $dfp_manager_dirname . "/" . $filename;
    
    if ( ! file_exists($file_path) ) {
      $file = fopen($file_path, "w");
      fwrite($file, "Deny from all");
      fclose($file);
    }
  }

}
