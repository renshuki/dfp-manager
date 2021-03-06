<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://fcbrossard.net/
 * @since             1.0.0
 * @package           Dfp_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       DFP Manager
 * Plugin URI:        https://wordpress.org/plugins/dfp-manager/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Renshuki
 * Author URI:        https://fcbrossard.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dfp-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dfp-manager-activator.php
 */
function activate_dfp_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dfp-manager-activator.php';
	Dfp_Manager_Activator::activate();
}

register_activation_hook( __FILE__, 'activate_dfp_manager' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dfp-manager-deactivator.php
 */
function deactivate_dfp_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dfp-manager-deactivator.php';
	Dfp_Manager_Deactivator::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_dfp_manager' );

/**
 * The code that runs DFP API within a background job.
 * This action is documented in includes/class-dfp-manager-api.php
 */
function cron_api_dfp_manager() {
  wp_schedule_single_event(time()+1, 'generate_ad_unit', array( $_POST ));
  #do_action('generate_ad_unit', $_POST);
}

if( isset($_POST['post_type']) && $_POST['post_type'] != 'ad_slot' ) {
  add_action( 'publish_'.$_POST['post_type'], 'cron_api_dfp_manager' );
}

function api_dfp_manager($post) {
  require_once plugin_dir_path( __FILE__ ) . 'includes/class-dfp-manager-api.php';
  Dfp_Manager_Api::main($post);
}

add_action('generate_ad_unit', 'api_dfp_manager', 10, 1);

/**
 * The code that runs during plugin uninstallation.
 * This action is documented in includes/class-dfp-manager-uninstaller.php
 */

function uninstall_dfp_manager() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/class-dfp-manager-uninstaller.php';
  Dfp_Manager_Uninstaller::uninstall();
}

register_uninstall_hook( __FILE__, 'uninstall_dfp_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dfp-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dfp_manager() {

	$plugin = new Dfp_Manager();
	$plugin->run();

}
run_dfp_manager();
