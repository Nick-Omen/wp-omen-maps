<?php
/**
 * Plugin Name: Omen Maps
 * Description: Simply add Google/Yandex map to your WordPress site via shortcode.
 * Version: 0.2.0
 * Text Domain: omen-maps
 *
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('OMEN_MAPS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('OMEN_MAPS_FOLDER_NAME', dirname(plugin_basename(__FILE__)));
define('OMEN_MAPS_PLUGIN_VERSION', '0.2.0');

require_once(OMEN_MAPS_PLUGIN_DIR . 'OmenMaps.class.php');
add_action('init', array('OmenMaps', 'init'));

if (is_admin()) {
    require_once OMEN_MAPS_PLUGIN_DIR . 'admin' . DIRECTORY_SEPARATOR . 'OmenMapsAdmin.class.php';
    add_action('init', array('OmenMapsAdmin', 'init'));
}