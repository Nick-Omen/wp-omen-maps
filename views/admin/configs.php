<?php

/**
 * Omen Maps configuration page.
 *
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
?>
<div class="wrap">
    <h1><?php _e('Omen Maps', 'omen-maps') ?></h1>

    <form method="post" action="options.php">
        <?php wp_nonce_field('update-options'); ?>
        <?php settings_fields('omen-maps-settings'); ?>
        <?php do_settings_sections('omen-maps-settings'); ?>

        <h3><?php _e('Google map configs', 'omen-maps'); ?></h3>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-api-key"><?php _e('Google Map API key', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_google-api-key"
                           name="omen_maps_google_api_key"
                           value="<?php echo esc_attr(get_option('omen_maps_google_api_key')); ?>"
                           type="text" size="64"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-initial-lat"><?php _e('Initial latitude', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_google-initial-lat"
                           name="omen_maps_google_initial_lat"
                           value="<?php echo esc_attr(get_option('omen_maps_google_initial_lat')); ?>"
                           type="number"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-initial-lng"><?php _e('Initial longitude', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_google-initial-lng"
                           name="omen_maps_google_initial_lng"
                           value="<?php echo esc_attr(get_option('omen_maps_google_initial_lng')); ?>"
                           type="number"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-initial-zoom"><?php _e('Initial zoom', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_google-initial-zoom"
                           name="omen_maps_google_initial_zoom"
                           value="<?php echo esc_attr(get_option('omen_maps_google_initial_zoom')); ?>"
                           type="number" size="2" min="0" max="21"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-marker-title"><?php _e('Marker title for Google map.', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_google-marker-title"
                           name="omen_maps_google_marker_title"
                           value="<?php echo esc_attr(get_option('omen_maps_google_marker_title')); ?>"
                           type="text" size="64"/>
                </td>
            </tr>
        </table>

        <h3><?php _e('Yandex map configs', 'omen-maps'); ?></h3>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="omen-maps_google-initial-lat"><?php _e('Initial latitude', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_yandex-initial-lat"
                           name="omen_maps_yandex_initial_lat"
                           value="<?php echo esc_attr(get_option('omen_maps_yandex_initial_lat')); ?>"
                           type="number"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_yandex-initial-lng"><?php _e('Initial longitude', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_yandex-initial-lng"
                           name="omen_maps_yandex_initial_lng"
                           value="<?php echo esc_attr(get_option('omen_maps_yandex_initial_lng')); ?>"
                           type="number"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_yandex-initial-zoom"><?php _e('Initial zoom', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_yandex-initial-zoom"
                           name="omen_maps_yandex_initial_zoom"
                           value="<?php echo esc_attr(get_option('omen_maps_yandex_initial_zoom')); ?>"
                           type="number" size="2" min="0" max="17"/>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="omen-maps_yandex-marker-title"><?php _e('Marker title for Yandex map', 'omen-maps') ?></label></th>
                <td>
                    <input id="omen-maps_yandex-marker-title"
                           name="omen_maps_yandex_marker_title"
                           value="<?php echo esc_attr(get_option('omen_maps_yandex_marker_title')); ?>"
                           type="text" size="64"/>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>