<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/samwondim
 * @since             1.0.0
 * @package           Crud
 *
 * @wordpress-plugin
 * Plugin Name:       CRUD
 * Plugin URI:        https://iRent.n
 * Description:       First plugin WordPress integration.
 * Version:           1.0.0
 * Author:            Samuel 
 * Author URI:        https://github.com/samwondim
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       crud
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

if (!defined("irent"))
	define("irent", "irent");

if (!defined("irent_PLAGIN_DIR"))
	define("irent_PLAGIN_DIR", plugin_dir_path(__FILE__));

if (!defined("irent_PLAGIN_URL"))
	define("irent_PLAGIN_URL", plugin_dir_url(__FILE__));

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('CRUD_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-crud-activator.php
 */
function activate_crud()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-crud-activator.php';
	Crud_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-crud-deactivator.php
 */
function deactivate_crud()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-crud-deactivator.php';
	Crud_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_crud');
register_deactivation_hook(__FILE__, 'deactivate_crud');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-crud.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_crud()
{

	$plugin = new Crud();
	$plugin->run();
}
run_crud();
