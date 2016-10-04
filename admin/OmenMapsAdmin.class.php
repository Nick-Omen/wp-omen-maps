<?php

/**
 * Omen Maps admin class.
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
class OmenMapsAdmin
{
    public $version;

    function __construct()
    {
        $this->version = OMEN_MAPS_PLUGIN_VERSION;
    }

    public static function init()
    {
        add_action('admin_menu', array('OmenMapsAdmin', 'add_menu_instance'));
        add_action('admin_init', array('OmenMapsAdmin', 'register_settings'));
        load_plugin_textdomain('omen-maps', false, OMEN_MAPS_FOLDER_NAME . '/languages/');
    }

    public static function add_menu_instance()
    {
        add_options_page(__('Omen Maps', 'omen-maps'), __('Omen Maps', 'omen-maps'), 'manage_options', 'omen-maps-config',
            array('OmenMapsAdmin', 'display_page_configs'));
    }

    public static function register_settings()
    {
        register_setting('omen-maps-settings', 'omen_maps_google_api_key');
        register_setting('omen-maps-settings', 'omen_maps_google_initial_lat');
        register_setting('omen-maps-settings', 'omen_maps_google_initial_lng');
        register_setting('omen-maps-settings', 'omen_maps_google_initial_zoom');
        register_setting('omen-maps-settings', 'omen_maps_google_marker_title');
        register_setting('omen-maps-settings', 'omen_maps_yandex_initial_lat');
        register_setting('omen-maps-settings', 'omen_maps_yandex_initial_lng');
        register_setting('omen-maps-settings', 'omen_maps_yandex_initial_zoom');
        register_setting('omen-maps-settings', 'omen_maps_yandex_marker_title');
    }

    public static function display_page_configs()
    {
        require_once OMEN_MAPS_PLUGIN_DIR . 'views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'configs.php';
    }
}
