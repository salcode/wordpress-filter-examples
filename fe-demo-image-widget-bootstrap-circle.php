<?php
/**
 * Plugin Name: Iron Code Demo Add Bootstrap Circle Class to Image Widget
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-image-widget-bootstrap-circle.php
 * Description: This plugin uses the option_woocommerce_stripe_settings filter to force the WooCommerece Stripe Gateway to be in testmode. This plugin only has an effect when WooCommerce and the WooCommerce Stripe Gateway plugins are both activated.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-image-widget-bootstrap-circle
 * Domain Path: /languages
 *
 * @package fe-demo-woo-stripe-testmode
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'image_widget_image_attributes', 'fe_image_widget_image_attributes' );

/**
 * This function appends the Bootstrap class `img-circle` to the widget provided by the plugin Widget Image.
 *
 * @param  array $attr Attributes for the Widget Image widget.
 * @return array Updated attributes for the Widget Image widget with ` img-circle` added to the 'class' key value.
 */
function fe_image_widget_image_attributes( $attr ) {
	$attr['class'] = $attr['class'] . ' img-circle';

	return $attr;
}
