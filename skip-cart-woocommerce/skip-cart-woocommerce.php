<?php
/*
Plugin Name: Skip Cart for WooCommerce
Description: Skips the cart page and redirects users directly to the checkout page in WooCommerce.
Version: 1.0
Author: Tu Nombre
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Hook to redirect to the checkout page
add_filter('woocommerce_add_to_cart_redirect', 'skip_cart_redirect_checkout');

function skip_cart_redirect_checkout($url) {
    return wc_get_checkout_url();
}
