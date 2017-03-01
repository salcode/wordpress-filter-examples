<?php
/**
 * Plugin Name: Iron Code Demo Content Disclaimer
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-content-disclaimer.php
 * Description: A demo using the the_content filter to add a disclaimer at the end of each post.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-content-disclaimer
 * Domain Path: /languages
 *
 * @package fe-demo-content-disclaimer
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'the_content', 'fe_not_company_disclaimer' );

/**
 * Append disclaimer to the end of the content.
 *
 * @param  string $content The content of the post.
 * @return string The content wih our disclaimer appended to the end.
 */
function fe_not_company_disclaimer( $content ) {
	return $content . '<blockquote class="bg-primary">This post is my personal opinion and does not reflect the views of my employer.</blockquote>';
}
