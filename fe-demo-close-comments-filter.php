<?php
/**
 * Plugin Name: Iron Code Demo Close All Comments with Filter
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-close-comments-filter.php
 * Description: Closes all comments on the site. When this plugin is deactivated all comments are restored to their original state (open or closed).
 * Version: 0.1.1
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-close-comments-filter
 * Domain Path: /languages
 *
 * @package fe-demo-close-comments-filter
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'comments_open', '__return_false' );
