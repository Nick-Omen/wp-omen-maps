<?php

/**
 * Yandex Map.
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

$omenMapsYandexWidth = isset($atts['width']) ? $atts['width'] == 0 ? "100%" : "{$atts['width']}px" : "100%";
$omenMapsYandexHeight = isset($atts['height']) ? $atts['height'] == 0 ? "100%" : "{$atts['height']}px" : "100%";
$omenMapsYandexLat = isset($atts['lat']) ? $atts['lat'] : esc_attr(get_option('omen_maps_yandex_initial_lat', 42.8768536));
$omenMapsYandexLng = isset($atts['lng']) ? $atts['lng'] : esc_attr(get_option('omen_maps_yandex_initial_lng', 74.5218208));
$omenMapsYandexZoom = isset($atts['zoom']) ? $atts['zoom'] : esc_attr(get_option('omen_maps_yandex_initial_zoom', 13));
?>
<div id="omen-maps-yandex"
     style="width: <?php echo $omenMapsYandexWidth; ?>; height: <?php echo $omenMapsYandexHeight; ?>;"></div>
<script>
    var omenMapsYandex;

    var omenMapsInitYandex = function(){
        omenMapsYandex = new ymaps.Map("omen-maps-yandex", {
            center: [
                <?php echo $omenMapsYandexLat; ?>,
                <?php echo $omenMapsYandexLng; ?>
            ],
            zoom: <?php echo $omenMapsYandexZoom; ?>
        });
    }
</script>