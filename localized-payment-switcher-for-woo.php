<?php
/**
 * Plugin Name:       Localized Payment Switcher for WooCommerce
 * Plugin URI:        https://github.com/JuniorTak/localized-payment-switcher-for-woo
 * Description:       Dynamically filter WooCommerce payment gateways based on any WordPress language/locale.
 * Version:           0.1.0
 * Author:            Hyppolite T.
 * Author URI:        https://github.com/JuniorTak/
 * Text Domain:       localized-payment-switcher-for-woo
 * Domain Path:       /languages
 * Requires at least: 6.5
 * Requires PHP:      7.4
 * Requires Plugins:  woocommerce
 * WC requires at least: 8.0
 * WC tested up to:   9.x
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package Localized_Payment_Switcher_For_Woo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Check if WooCommerce is active upon plugin initialization.
 */
add_action( 'admin_init', function() {
    if ( ! class_exists( 'WooCommerce' ) ) {
        add_action( 'admin_notices', function() {
            ?>
            <div class="error">
                <p><?php esc_html_e( '<strong>Localized Payment Switcher for WooCommerce</strong> requires WooCommerce to be installed and active.', 'localized-payment-switcher-for-woo' ); ?></p>
            </div>
            <?php
        } );

        // Deactivate the plugin automatically
        deactivate_plugins( plugin_basename( __FILE__ ) );
    }
} );
