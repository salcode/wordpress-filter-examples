<?php
/**
 * Plugin Name: Iron Code Demo Modify Excerpt Ellipsis
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-mod-excerpt-ellipsis.php
 * Description: Modify the characters that appear at the end of a truncated excerpt from `[…]` to a north east pointing arrow.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-mod-excerpt-ellipsis
 * Domain Path: /languages
 *
 * @package fe-demo-mod-excerpt-ellipsis
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'excerpt_more', 'fe_demo_modify_excerpt_ellipsis' );

/**
 * Return a blank space followed by a North East arrow.
 *
 * @param  string $truncate_indicator The original truncate_indicator ' [&hellip;]'.
 * @return string A space followed by a North East arrow.
 */
function fe_demo_modify_excerpt_ellipsis( $truncate_indicator ) {
	return ' &#8663;';
}
