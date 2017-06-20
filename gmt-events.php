<?php

/**
 * Plugin Name: GMT Events
 * Plugin URI: https://github.com/cferdinandi/gmt-events/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-events/
 * Description: Adds an Events custom post type.
 * Version: 2.2.0
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * License: MIT
 */


// Options & Helpers
require_once( plugin_dir_path( __FILE__ ) . 'includes/helpers.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/options.php' );

// Custom Post Type
require_once( plugin_dir_path( __FILE__ ) . 'includes/cpt.php' );
require_once( plugin_dir_path( __FILE__ ) . 'includes/metabox.php' );


// Flush rewrite rules on activation and deactivation
function gmt_events_flush_rewrites() {
	events_add_custom_post_type();
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'gmt_events_flush_rewrites' );