<?php
/**
 * Plugin Name: WAX disable woocommerce admin and woocommerce analytics
 * Plugin URI: https://www.webaxones.com
 * Description: Disable WooCommerce Admin and WooCommerce Analytics
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;

/**
 * Disable WooCommerce Admin and WooCommerce Analytics
 */

add_filter( 'woocommerce_admin_disabled', '__return_true' );
add_filter( 'woocommerce_admin_features', '__return_empty_array' );

