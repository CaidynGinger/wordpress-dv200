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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dv200_db' );

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
define( 'AUTH_KEY',         'i}u/n~D_G=_LLA,7dS`2%ps{)Mhca_Xz043jjB?TOVDPd#wWw~orv!gc@xVznSkn' );
define( 'SECURE_AUTH_KEY',  '8gDdlI+a@wY!zgPc(gf+z)Wobp`b5W%,(FY&53ih)SPO]P ^[D_=AUa&HRV[dOLb' );
define( 'LOGGED_IN_KEY',    'K=`vc0~;LyZR/_%wPw=wKH+F@x<2dGb@046t5`APE`r1%5+}w|gGQ9E0i~=Vu5YC' );
define( 'NONCE_KEY',        '1I->#<)a7E|*OD3=5hDdM&ZX4~sf5uYBw3`J~b7;:)f;|oNM6B7acJH Ja~-CAHI' );
define( 'AUTH_SALT',        ' )I5 AnNkg*K028q$?2FpT QF<T&dC7#=[+&v!v95JYj&h?GCb$_0|v=FF5 Fxu;' );
define( 'SECURE_AUTH_SALT', '-L2W)NvBW[|DX-A!FtL[rN^Ielq<a.n?7]?[*[C_@1zHzk:0]1jX^* /-WbG=ABO' );
define( 'LOGGED_IN_SALT',   '!`[g1,}uk=k;14rN+-E?!?|:gmLF)D&@~Ph7,J?`5SU(vBJj([Z2ynT._K3Kv,Mf' );
define( 'NONCE_SALT',       'sW#yxdOO#%@LdSxzKAulce|5t3+du|i+H-rxz<#OWK8,m#P:6 R*C7E>N2fOOqq`' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
