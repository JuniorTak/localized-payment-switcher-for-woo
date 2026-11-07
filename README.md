# Localized Payment Switcher for WooCommerce

A WordPress plugin project for managing WooCommerce payment gateway availability by WordPress locale.

> **Development status:** This is an early development release. The current plugin code checks whether WooCommerce is active and deactivates itself when it is not. Locale-based payment gateway filtering and its settings page are planned, but are not implemented yet.

## Requirements

- WordPress 6.5 or later
- PHP 7.4 or later
- WooCommerce 8.0 or later

## Installation

1. Copy or clone this repository into `wp-content/plugins/localized-payment-switcher-for-woo`.
2. Activate **Localized Payment Switcher for WooCommerce** from the WordPress Plugins screen.
3. Ensure WooCommerce is installed and active.

## Development

Development dependencies are managed with Composer:

```sh
composer install
```

The project includes PHPUnit configuration and WordPress plugin tests. Set up the WordPress test library and database using `bin/install-wp-tests.sh`, then run:

```sh
vendor/bin/phpunit
```

## License

Licensed under the GNU General Public License, version 2 or (at your option) any later version. See [LICENSE](./LICENSE).
