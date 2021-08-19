<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qHJEEGlcQ6a98TNYBO6x31TgAVCXZRKxVZ0LOQTTPjbMM7a1LE3EgkDjQskaw509' );
define( 'SECURE_AUTH_KEY',  'PvlfKnjRsZRKTyVeXOFNBeOhX9RCZHgGnydy8wropD7B8BWh476LrU9VLvxEwGlp' );
define( 'LOGGED_IN_KEY',    'Sbb6tX1dtEeNdNtDlk0ZzQgSvRuTZkqQiM4F6SSyX3i9TG6f1d1EAu5EZNVsYmhM' );
define( 'NONCE_KEY',        'YGnYAbyMyZ1riggEbfbyGkikeIVKr9gJCv6isauQwM2e5x7kUbz2ErHJrvW37KBL' );
define( 'AUTH_SALT',        '5cySHq6kDkM6nJ4G2bd8MNkMWzlBUX7BXd9WOs895xJlfo8pO09nIokNUeXCe9WL' );
define( 'SECURE_AUTH_SALT', 'jQs8NTQWYWvHjh1O892xDEjvu7FmDNh8lmb00rH3D54iv5w6pmX8k0oEB850N9cT' );
define( 'LOGGED_IN_SALT',   'IE4JUAPCAPcj7W96s9ANcSewRkT1CDNfOVgWt9gxdoY8QzimGP1evJTgw0hDNKoa' );
define( 'NONCE_SALT',       'hBmGZw1ks1RTKGqs4aVTvs7O6d3ySuD2kVmjLvMDNvvNhTsfEwiIf8REFmA5eZvA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
