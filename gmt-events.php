<?php

/**
 * Plugin Name: GMT Events
 * Plugin URI: https://github.com/cferdinandi/gmt-events/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-events/
 * Description: Adds an Events custom post type.
 * Version: 1.0.1
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