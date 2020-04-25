<?php

/**
 * Plugin Name: Recipe
 * Description: A simple Wordpress plugin that allows users to create recipes and rate those recipes
 * Author: Wright
 * Author URI: https://www.twitter.com/re_wrighting
 * Text Domain: recipe
 */

if (!function_exists('add_action')) {
    die('🙅‍♂️🚫 No scripts kiddies here please.');
}

// Setups

// Includes
include_once('includes/activate.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');

// Shortcodes
