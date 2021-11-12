<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kronoslabs.io
 * @Donatelink        https://www.buymeacoffee.com/kwcjr
 * @since             1.0.0
 * @pluginURI         https://bitbucket.org/kronoslabs/company_worker/src/master/
 *
 * @HowTo             To White Label within the WordPress Admin, change the Company info
 *                    under @wordpress-plugin below with your info.
 *
 * @wordpress-plugin
 * Plugin Name:       Company Worker
 * Description:       This plugin checks to see if the MainWP Child plugin is installed and activated; If not, it will download it and install it.
 * Version:           1.0.0
 * Author:            Company
 * Author URI:        https://Your-Company.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'COMPANY_WORKER_VERSION', '1.0.0' );

include_once( __DIR__ . '/vendor/autoload.php' );
WP_Dependency_Installer::instance()->run( __DIR__ );

