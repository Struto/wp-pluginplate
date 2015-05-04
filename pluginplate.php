<?php
/*
 * Plugin Name:       PluginPlate
 * Plugin URI:        https://github.com/Struto/wp-pluginplate
 * Description:       WordPress OOP Plugin Boilerplate
 * Version:           0.0.1
 * Author:            Archie Makuwa
 * Author URI:        http://www.aatsol.co.za
 * Text Domain:       struto-pluginplate-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-pluginplate.php';

function run_pluginplate() {
    $pp = new Pluginplate();
    $pp->run();
}

run_pluginplate();

