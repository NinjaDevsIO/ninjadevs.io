<?php

/*
Plugin Name: ninjadevs.io
Plugin URI: http://www.ninjadevs.io
Description:  ninjadevs.io plugin
Author: ninjadevs.io
Version: 1.0
Author URI: http://www.ninjadevs.io
*/

/* -------------------------------------------------------------------------- */

defined('ABSPATH') or die('hmmm!');

/* -------------------------------------------------------------------------- */

/**
 * Admin specific and public facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/common.php';
/**
 * Admin specific hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/admin.php';
/**
 * Public facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/public.php';

/* -------------------------------------------------------------------------- */
