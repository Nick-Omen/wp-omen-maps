<?php

/**
 * Google Map
 * Author: Nikita Nikitin <nikita.omen666@gmail.com>
 * Author URI: http://www.nick-omen.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

$omenMapsGoogleWidth = isset($atts['width']) ? $atts['width'] == 0 ? "100%" : "{$atts['width']}px" : "100%";
$omenMapsGoogleHeight = isset($atts['height']) ? $atts['height'] == 0 ? "100%" : "{$atts['height']}px" : "100%";
$omenMapsGoogleLat = isset($atts['lat']) ? $atts['lat'] : esc_attr(get_option('omen_maps_google_initial_lat', 42.8768536));
$omenMapsGoogleLng = isset($atts['lng']) ? $atts['lng'] : esc_attr(get_option('omen_maps_google_initial_lng', 74.5218208));
$omenMapsGoogleZoom = isset($atts['zoom']) ? $atts['zoom'] : esc_attr(get_option('omen_maps_google_initial_zoom', 13));
?>
<div id="omen-maps-google"
     style="width: <?php echo $omenMapsGoogleWidth; ?>; height: <?php echo $omenMapsGoogleHeight; ?>;"></div>
<script>
    var omenMapsGoogle;
    var omenMapsInitGoogle = function(){
        omenMapsGoogle = new google.maps.Map(document.getElementById('omen-maps-google'), {
            zoom: <?php echo $omenMapsGoogleZoom; ?>,
            center: {
                lat: <?php echo $omenMapsGoogleLat; ?>,
                lng: <?php echo $omenMapsGoogleLng; ?>
            }
        });
    };
</script>