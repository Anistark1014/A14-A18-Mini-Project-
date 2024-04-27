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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u756953256_A7X4k' );

/** Database username */
define( 'DB_USER', 'u756953256_1tfbS' );

/** Database password */
define( 'DB_PASSWORD', 'EzgbdISvZo' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$zyaWMO{LD/1L2=&E6QL88QZuiAZ~*~a$=+]u-&Ew/^aw[7S<;-$[ku$$6jeF*VG' );
define( 'SECURE_AUTH_KEY',   '9;dPvoVxv:a ]x05k($(-BUiw`sd4dlTEHn<@ LsdegGT~ZE/lzTHri}&VQ q7yV' );
define( 'LOGGED_IN_KEY',     'b-s C2 ](dBcjz=Vf^T;15)N&H>bg3yHGg(y.+wEt93&f+p@a&)|M/EY|MZH|.TM' );
define( 'NONCE_KEY',         '%a1}/sgmD.O~_J8{`^U,N^-wP c}cy|g+b,NnFvPI5)662G1AA!Ng&cF=6-)~ h.' );
define( 'AUTH_SALT',         '(-m`vm,T/$Gb1>ZMaH 9;@JY0[M%>]gI^xCrr2$71YK,)Fio*29<<M/,br#W$]Yx' );
define( 'SECURE_AUTH_SALT',  '/C}s>;6A|w%fq!e3~/8z/rw4f yB)@*T!?^d+tAlQ:s_SslfV%`~xjah52;$M^kQ' );
define( 'LOGGED_IN_SALT',    'alpl9g+BYxXa$f((K^g^W4ol`G$)X_Ha #as0[7[YAjO_0t .r-?h]_P6T1(FBX;' );
define( 'NONCE_SALT',        '0h+M9;qsWXCD/=B|lLAxN.eEbRt1d8El;X>$9jM7tWIbL9=ic9(KS,h+YO*EkIwk' );
define( 'WP_CACHE_KEY_SALT', 'htyX h?)z+-6daDv>0!EM*5LD7bhhPc&)N HNG,t?7iRsyUGhaI 4guC3U}1_QCV' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
