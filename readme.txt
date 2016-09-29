=== WP Omen Maps ===
Contributors: nikitaomen666
Tags: maps, google, yandex, integration
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The plugin allows you to add a Google or Yandex map on your WordPress site in a simple way.

== Description ==

= Main features: =
* Add Google or Yandex map on the site, no coding required!
* Initial map position and zoom level set up.

= You can add a map in a post or on a page via adding the shortcode in the text editor: =
* [omen_maps_google] - for Google map
* [omen_maps_yandex] - for Yandex map

Maps use settings from the configuration screen by default, but you can change map width, height, initial coordinates and zoom level for the specific map.

For example:
= This shortcode will render the Google Map with 300px height and on 12 zoom. =
* [omen_maps_google height="300" zoom="12"]
= And this will render the Yandex Map with initial screen in Bishkek. =
* [omen_maps_yandex lat="42.873995" lng="74.600855"]

= Available parameters: =
* lat - Latitude
* lng - Longitude
* zoom - Zoom(0-21 for Google map, 0-17 for Yandex map)
* width - Width of the map. Pass 0 if you need full-width map.
* height - Height of the map. Pass 0 if you need a full-height map.
* title - Title for the initial marker.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Settings->Omen Maps screen to configure the plugin
1. Use it!

== Changelog ==

= 0.2.0 =
* Added marker on map.
* Add Title to marker.
* Add Russian localization.
* Fixed values on the config page.