<?php
/**
 * Plugin Name: Iron Code Demo Force WooCommerce Stripe plugin to testmode.
 * Plugin URI: https://github.com/salcode/wordpress-filter-examples/tree/master/fe-demo-woo-stripe-testmode.php
 * Description: This plugin uses the option_woocommerce_stripe_settings filter to force the WooCommerece Stripe Gateway to be in testmode. This plugin only has an effect when WooCommerce and the WooCommerce Stripe Gateway plugins are both activated.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: fe-demo-woo-stripe-testmode
 * Domain Path: /languages
 *
 * @package fe-demo-woo-stripe-testmode
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'option_woocommerce_stripe_settings', 'fe_woo_stripe_force_testmode' );

/**
 * This function modifies the woocommerce_stripe_settings to be in testmode.
 *
 * @param  array $settings The WooCommerce settings from the database.
 * @return array The updated WooCommerce settings withh testmode set to "yes".
 */
function fe_woo_stripe_force_testmode( $settings ) {

	if ( ! is_array( $settings ) ) {
		return $settings;
	}

	$settings['testmode'] = 'yes';
	return $settings;
}
