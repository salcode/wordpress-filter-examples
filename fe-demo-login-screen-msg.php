<?php
/**
 * Plugin Name: Iron Code Demo Login Screen Message
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-login-screen-msg.php
 * Description: A demo using the login_message filter to add a message on the login screen.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-login-screen-msg
 * Domain Path: /languages
 *
 * @package fe-demo-login-screen-msg
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'login_message', 'fe_demo_login_message' );

/**
 * Prepend "Use your words wisely" to the string passed in as a argument.
 *
 * @param  string $str The message to be displayed on the WordPress login page, often this is a blank string.
 * @return string The message wih "Use your words wisely" added to the beginning.
 */
function fe_demo_login_message( $str ) {
	return '<h1>Use your words wisely</h1>' . $str;
}
