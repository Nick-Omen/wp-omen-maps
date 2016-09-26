<?php

/**
 * Omen maps.
 *
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
class OmenMaps
{
    public static function init()
    {
        add_shortcode('omen_maps_google', array('OmenMaps', 'insert_google_map'));
        add_shortcode('omen_maps_yandex', array('OmenMaps', 'insert_yandex_map'));
    }

    public static function insert_google_map($atts)
    {
        if (!esc_attr(get_option('omen_maps_google_api_key'))) {
            _e("The google map API key is required. Please add it in admin panel.", "omen-maps");
            return;
        }
        add_filter('script_loader_tag', array('OmenMaps', 'add_async_defer_attribute'), 10, 2);
        wp_register_script('google-map', "https://maps.googleapis.com/maps/api/js?key=" . esc_attr(get_option('omen_maps_google_api_key')) . "&callback=omenMapsInitGoogle", false, null, true);
        wp_enqueue_script('google-map');
        require_once OMEN_MAPS_PLUGIN_DIR . 'views' . DIRECTORY_SEPARATOR . 'google_map.php';
    }

    public static function insert_yandex_map($atts)
    {
        wp_enqueue_script('yandex-map', "https://api-maps.yandex.ru/2.1/?lang=" . get_locale() . "&onload=omenMapsInitYandex", false, null, true);
        require_once OMEN_MAPS_PLUGIN_DIR . 'views' . DIRECTORY_SEPARATOR . 'yandex_map.php';
    }

    public static function add_async_defer_attribute($tag, $handle)
    {
        if ('google_map' !== $handle) {
            return $tag;
        }
        return str_replace(' src=', ' async defer src=', $tag);
    }
}