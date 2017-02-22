<?php
/**
 * Plugin Name: Iron Code Demo admin_footer_text filter
 * Plugin URI: TBD
 * Description: A demo using the admin_footer_text filter to change the admin footer text.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-admin-footer-text
 * Domain Path: /languages
 *
 * @package fe-demo-admin-footer-text
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'admin_footer_text', 'fe_demo_admin_footer_text' );

/**
 * This function returns branded markup for the footer in the admin
 *
 * @param string $text The current markup for the footer in the admin.
 * @return string THe updated (branded) markup for the footer in the admin.
 */
function fe_demo_admin_footer_text( $text ) {
	return '<span id="footer-thankyou">This site created by '
		. '<a href="http://ironco.de/">Iron Code Studio</a> '
		. 'with <a href="https://wordpress.org/">WordPress</a>.</span>';
}
