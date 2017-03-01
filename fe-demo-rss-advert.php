<?php
/**
 * Plugin Name: Iron Code Demo RSS Feed Adverstisment
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-rss-advert.php
 * Description: Add an advertisement blurb to the end of each post in the RSS feed (only). Does not affect posts on the website.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-rss-advert
 * Domain Path: /languages
 *
 * @package fe-demo-rss-advert
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'the_content_feed', 'fe_rss_ad' );

/**
 * Append advertisement blurb to the end of content when viewed in the RSS feed.
 *
 * @param  string $content The html content.
 * @return The html content with the advertisment appended.
 */
function fe_rss_ad( $content ) {
	$hire_blurb = "\n<h3>If you enjoyed this content, you should consider viewing Sal's other posts at <a href=\"https://salferrarello.com/\">salferrarello.com</a></h3>\n";
	return $content . $hire_blurb;
}
