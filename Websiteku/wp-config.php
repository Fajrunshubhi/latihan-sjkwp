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
define( 'DB_NAME', 'latihansjk' );

/** MySQL database username */
define( 'DB_USER', 'subi' );

/** MySQL database password */
define( 'DB_PASSWORD', '20523181' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'd(VVsT|2)&rm9Vs=qsgTLS)5|RDtmaRYQ3Kg!:GbZhc}d?@!ARaJk6v$.lRlPwvy' );
define( 'SECURE_AUTH_KEY',  'mx=|la$*8AW_uzX-&$r-Ia/vG~P3T]]YaN|/>a;quq$]EU1NN uQ1 ?M0=.HW*CM' );
define( 'LOGGED_IN_KEY',    'H@kmM)eh2xm.YcLywS5vCu+(8?6/kv#A0J`pQ}tF%%>X&lOZ0co{uHtR/8_JE2SD' );
define( 'NONCE_KEY',        ']ft|er?1r1J`D:{<`G7WB:eo~h~,r{f24<D`eCFehVS!Q[4DDf5Y0FEo.Lwd!HU5' );
define( 'AUTH_SALT',        'gLiX9N%p!~T[@@:40)p U@HNflTwVvopS><CkG&bZ[UOSPw^39AJidD*,3, P+cb' );
define( 'SECURE_AUTH_SALT', '),M}n=/wr4vfN%<kxT9M5125w.{ G)iNx/dEe?YhVn-t,@;O}d{)3m;p^BKzCqO3' );
define( 'LOGGED_IN_SALT',   'ANgEZ u9sKfk-ydhld70QK02<@q+wDC:{a1uFjt,q`9m`_((kjy.%, fKh`h<F2[' );
define( 'NONCE_SALT',       '3&4=wz+4D6A DIYb:hk^;>c+w[Br<xg.>6W?6=v?!#<a:rm9,Hqw_{6a*:z@!?v8' );

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