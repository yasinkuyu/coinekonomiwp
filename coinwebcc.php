<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://coin.web.tr/
 * @since             1.0.0
 * @package           Coinwebcc
 *
 * @wordpress-plugin
 * Plugin Name:       CoinWeb Crypto-Currency
 * Plugin URI:        http://coin.web.tr/
 * Description:       Bitcoin and crypto money market values and detailed information
 * Version:           1.0.0
 * Author:            Yasin Kuyu - Coin.web.tr
 * Author URI:        http://coin.web.tr/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       coinwebcc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-coinwebcc-activator.php
 */
function activate_coinwebcc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coinwebcc-activator.php';
	Coinwebcc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-coinwebcc-deactivator.php
 */
function deactivate_coinwebcc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-coinwebcc-deactivator.php';
	Coinwebcc_Deactivator::deactivate();
}
 

function get_full_list(){
 require plugin_dir_path( __FILE__ ) . 'templates/full.php';

} 

add_shortcode('coinweb_full', 'get_full_list');

register_activation_hook( __FILE__, 'activate_coinwebcc' );
register_deactivation_hook( __FILE__, 'deactivate_coinwebcc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-coinwebcc.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/settings.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_coinwebcc() {

	$plugin = new Coinwebcc();
	$plugin->run();
}

run_coinwebcc();
