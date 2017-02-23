<?php
/**
 * Plugin Name: Gravity Flow Demo
 * Plugin URI:  http://cimbura.com
 * Description: This is just a simple functionality plugin that sets up some base elements for a Gravity Flow demo
 * Version:     1.0.0
 * Author:      Cimbura.com (Marty Kokes)
 * Author URI:  http://cimbura.com
 * Text Domain: gravity-flow-demo
 **/

// Exit if this file accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Define a contact for our plugin path.
define( 'GFD_PLUGIN_DIR', trailingslashit( dirname( __FILE__ ) ) );

// Setup our snacks custom post type.
require_once GFD_PLUGIN_DIR . 'includes/custom-post-types.php';

// Add Custom Fields to our Post
require_once GFD_PLUGIN_DIR . 'includes/acf-fields.php';

// Create A Custom Gravity Flow Step.
require_once GFD_PLUGIN_DIR . 'includes/gravityflow-step.php';
