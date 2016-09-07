<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://austinvernsonger.github.com
 * @since             1.0.0
 * @package           S_Aaos_As
 *
 * @wordpress-plugin
 * Plugin Name:       Songer AAOS Abstract System
 * Plugin URI:        https://github.com/austinvernsonger/Songer-AAOS-Abstract-System
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Austin Vern Songer
 * Author URI:        http://austinvernsonger.github.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       s-aaos-as
 * Domain Path:       /languages
 */

require_once '/includes/camptix/camptix.php';
require_once '/includes/visual-form-builder/   ';
require_once '/includes/wordpress-backup-to-dropbox/   ';
require_once '/includes/wp-better-emails/   ';
require_once '/includes/wp-members/   ';
require_once '/includes/wp-user-frontend/   ';
require_once '/includes/wysija-newsletter/   ';
// require_once '/includes/   ';

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-s-aaos-as-activator.php
 */
function activate_s_aaos_as() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-s-aaos-as-activator.php';
	S_Aaos_As_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-s-aaos-as-deactivator.php
 */
function deactivate_s_aaos_as() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-s-aaos-as-deactivator.php';
	S_Aaos_As_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_s_aaos_as' );
register_deactivation_hook( __FILE__, 'deactivate_s_aaos_as' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-s-aaos-as.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_s_aaos_as() {

	$plugin = new S_Aaos_As();
	$plugin->run();

}
run_s_aaos_as();
