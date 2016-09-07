<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://austinvernsonger.github.com
 * @since      1.0.0
 *
 * @package    S_Aaos_As
 * @subpackage S_Aaos_As/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    S_Aaos_As
 * @subpackage S_Aaos_As/includes
 * @author     Austin Vern Songer <austinvernsonger@outlook.com>
 */
class S_Aaos_As_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			's-aaos-as',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
