<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://coin.web.tr/
 * @since      1.0.0
 *
 * @package    Coinwebcc
 * @subpackage Coinwebcc/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Coinwebcc
 * @subpackage Coinwebcc/includes
 * @author     Yasin Kuyu - Coin.web.tr <bilgi@coin.web.tr>
 */
class Coinwebcc_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'coinwebcc',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
