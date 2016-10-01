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
require_once plugin_dir_path( __FILE__ ) . 'includes/gettext.php';
/**
 * Admin specific and public facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/common.php';
/**
 * Adminbar style.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/adminbar-style.php';
/**
 * Admin specific hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/admin.php';
/**
 * Public facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/public.php';

/* -------------------------------------------------------------------------- */
