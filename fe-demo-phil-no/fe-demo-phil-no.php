<?php
/**
 * Plugin Name: Iron Code Demo Phil, prepend "No, "
 * Plugin URI: TBD
 * Description: A demo using the the_title filter to change the title on all posts, this is based on Sal Ferrarello's talk "Making WordPress Filters Work for You".
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-phil-no
 * Domain Path: /languages
 *
 * @package fe-demo-phil-no
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'the_title', 'fe_demo_phil_no' );

/**
 * Prepend "No, " to the string passed in as a argument.
 *
 * @param  string $str The title stored in the WordPress database.
 * @return string The title wih "No, " added to the beginning.
 */
function fe_demo_phil_no( $str ) {
	return 'No, ' . $str;
}
