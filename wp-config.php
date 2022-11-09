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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'E>OsB}kwg*Yf:9FQ{/On0xSWDDxyE38#$dG 3Sw0c8l#+W]1~055emV&mjh^m%.G' );
define( 'SECURE_AUTH_KEY',  '~nr#i3pIyPZ!Fa=OU:p13qetyI}dc&12E,{jbfD/B(BR7&u?Kk_EuRojcXrXjwO8' );
define( 'LOGGED_IN_KEY',    'PKjL~G!yC&Kfa}-k^dfeakto+&Ec~O/n.!8fUg2O#wu^;-RW:y>PlRV<X?^&4&dC' );
define( 'NONCE_KEY',        '@0rz9QR@La: fTb8<[a.V,xr7]+R=t<4_ECnh&pLoQ?1`CE?,-j$frlpgQ9jWNp[' );
define( 'AUTH_SALT',        'gxU2w:8~81c1qh1p| ^8]M#P:8;r%e^55B. s*pS{V1Ja(EX9.cTlz+1j3[NhCJ)' );
define( 'SECURE_AUTH_SALT', '&uQR%Moy^${q-Go6DJ]V/#VqeFkw=L=:QxOm:g|7n0r=%2/>@,&JM]oOBEO9w3de' );
define( 'LOGGED_IN_SALT',   '@Sk;[5Sm2(V-pe}{Q,ur -1OYs4_b /3[;*JhKm@_%o>;H9={Sz-~~d1M}9*FG9y' );
define( 'NONCE_SALT',       'r8U=QQiQjI|&Os[MKe?;pRHcoAro~>3&$!XYJ2W7*QufDL7s)97fi8S,Sc7,#%~i' );

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
