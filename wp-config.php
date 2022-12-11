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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'E^/FKLMpt$Q ~V8Xv41z:z2-B&57yj&D1W&1}>qPDl/2$bI|Vmf/m?#P&1SF~{LX' );
define( 'SECURE_AUTH_KEY',  'm~`ozF-xY#nt%yJ9H/.YB0P(uLHds+Y=_H<U2zkj@COO|iHViuDATCin#E5$NN%|' );
define( 'LOGGED_IN_KEY',    'l`s^kt:4Cmr6P^/^U9,v)QlYt5;b.)9v 8q^omUG]vz0V#bC?LCC+r-/kD2UYP[w' );
define( 'NONCE_KEY',        ':Z2Dl;a>4/$f}J+HsflsH))D?:Vs=w3M5gQ&No27Py|;p:Q0I-L@D t[;q,zD4N6' );
define( 'AUTH_SALT',        '[J.ku+sFke6>OwELTtz4BjluSLdz&$qa`h3&(*s%lLtT+S?TeK]5Ep`p[V*.kW_A' );
define( 'SECURE_AUTH_SALT', '3[xvifYl`bOxo76Q|;t/Y{3TJoeQzAQ_B7=Z;J|zCTBua&7Tu_my$7KQA`$SH!-G' );
define( 'LOGGED_IN_SALT',   '7x8xctb1 PLRV)y>0%F?=p;a%uzj55:0@(H|I/Vh~ Zc61F?/;F3#mCTRGQ}C:(&' );
define( 'NONCE_SALT',       '1PrQv2C;Ulhzf7NQkHNSx=?leqo;?Rv[Ju0@37urfY?`4DJq<&V7<f{_i]4@m2.Q' );

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
