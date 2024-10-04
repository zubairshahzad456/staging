<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'kL,<Mx>(jNQNdMe&.BIn3ebOroW@!x!:y;+U[Ola| :FyDw`/txqfxeEJ:uoz7f|' );
define( 'SECURE_AUTH_KEY',  '351-uEBz>}k3nttsU/_?>Wj>;%h-|Bbu5P.Ub5#oRU$;7ZD+Q/-<RVATp[a6mu1e' );
define( 'LOGGED_IN_KEY',    'n[yhs:#qv6.,8p<EI/.d|6J@/B MNfX~!0?_~0QZZv$PU8(4;KS#L4 wc#GZ6xWn' );
define( 'NONCE_KEY',        'd-T4Z:#{t2 ;b-6#H6TP2CtW/nrg}es+(.o4irQGluDcDSSAvX>8c^H&S48gp5q)' );
define( 'AUTH_SALT',        '~h$JF!9*E^MhHUo`65aW/[Fc56JZ9W187I[(yiW%)Gc{~0MJq?#3f8-{Kx/H^|dT' );
define( 'SECURE_AUTH_SALT', '/+5ab|,[5%BJ37t^c]U]0-o_73j[$z@Z[BIbYL+idnB7%RGuFGRBy1C]f_(=2u5k' );
define( 'LOGGED_IN_SALT',   'HiHRBkJZt~bwR>{b@ Rb}!X2G-e9au8gwmWYOuzy&t0c[P/LuQaQEmEZ#TQ WT[S' );
define( 'NONCE_SALT',       '(&sDpYC;/iVEd[3XB/qKXM.GU~@E@09A{^a&y^tC-R^v.(-1b9%7/Lsi9+bnjo^:' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
