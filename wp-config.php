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
define( 'DB_NAME', 'websitekuu' );

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
define( 'AUTH_KEY',         '7jo5>%~2WRG]~Z~>ODQ? svMt[,2(+&QF|FUza:AH;VN~|Y[2Y20s$:qHAJD$U^h' );
define( 'SECURE_AUTH_KEY',  'gUj^7X1nfl/cFM9_!n$v9BV}sRB5T v_kNrqVrp:P)=<j3XM{90(-g0LMk+qDPU*' );
define( 'LOGGED_IN_KEY',    'cq&(ulV804N sKIj8s`civC@_A0+YA&nx*:1~u[B1a+f;vrwk?NSxMV7Nv099(w9' );
define( 'NONCE_KEY',        'pU^~I8; m 6-5/rp6fTa#?<.@L1);.t}<}z:u$1}^^sNZL+Ah)5c>Mf|`CKEj:q%' );
define( 'AUTH_SALT',        'lP(?M^+ SwL&uKHL*pT<oy(xN_%BV*%Jx%L`a_$3k7f;u6[&p.W#|c2S.MM/i/{7' );
define( 'SECURE_AUTH_SALT', 'tLe{EOl^}Az<{?#1_j-OXmWC1]|Tp0t[!^;Js7-DbbFB:{BUG?&w1m-x2@,E^IZV' );
define( 'LOGGED_IN_SALT',   'R?s&UuL-kA0!/h}oZRC?{^^O&Tlzv0<7Q}j9&aHjpRrOPPqK*`oYbEEA;+!&(hA ' );
define( 'NONCE_SALT',       '>b}T}aZOux|D.O+qu/0*CQl$!3Y:<# [*O2f%yZd~pPgjTVcNOkx.:~Ga7.%%P[r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'web_';

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
