<?php
/**
 * Plugin Name: Screenr
 * Plugin URI: https://wordpress.org/plugins/screenr/
 * Description: (Deprecated) The Screenr allows get the Screenr embed code for any Screenr screencast.
 * Version: 0.1
 * Author: albertochoa
 * Author URI: https://gitlab.com/albertochoa
 * License: GPL2
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Add Screenr as oEmbed provider */
wp_oembed_add_provider( 'http://www.screenr.com/*', 'http://www.screenr.com/api/oembed.{format}', false );
