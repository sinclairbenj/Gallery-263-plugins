<?php
/**
 * Plugin Name:       Gallery 263 Custom Blocks
 * Plugin URI:        https://benswallace.com/gallery-263
 * Description:       A plugin to add custom blocks to the Gallery 263 theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Ben S Wallace
 * Author URI:        https://benswallace.com/
 * Update URI:        https://benswallace.com/gallery-263/plus-updates
 * Text Domain:       g263-plus
 * Domain Path:       /languages
 */

 if(!function_exists('add_action')) {
    echo 'Access denied';
    exit;
}

// Setup

define('GP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes

include(GP_PLUGIN_DIR . 'includes/register-blocks.php');
include(GP_PLUGIN_DIR . 'includes/blocks/search-form.php');

// Hooks

add_action('init', 'gp_register_blocks');