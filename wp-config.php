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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/O^vJ6HjT|LSzW/PN@Oqxcx^n_-ka>)-zLE$CJXbT:?J%=m:cZ2rj/RQ0RQRB5ap' );
define( 'SECURE_AUTH_KEY',  '1Lr9&wBMD8a>QsWD2Gj`!b)7<;-1~<Sz$[Zj_e&@}Igo8T(<3)llZUwwEYp]}^N7' );
define( 'LOGGED_IN_KEY',    'a!QgX;`h-E`rgI(/fU& |t=GNm>bEnGwJJ7[egt[rz[@Zm<%[;52-X<?<3B_d*W{' );
define( 'NONCE_KEY',        'IA+aB*gFIo% 6nG8Rx.e<oOB4(q)20h4b7Rzmv3H9xM&jr{]Sc.r-{ e53Y6Q-?)' );
define( 'AUTH_SALT',        '~gZJ6|<SiQx1hI&t,HA Wr-SX>ikw@]X%E}+t=ZQ.:L,^:2.Q,x~U0x36]^H-CM>' );
define( 'SECURE_AUTH_SALT', '! ;Jq?Gq[iIo;LG+@p[$X$L=]3AhP)u1zo>[f1Gu}i}39d[PSsv>B7A,Yumn>7Kh' );
define( 'LOGGED_IN_SALT',   'x!oOv7X*O1KZSYSn;#3ppxay#d MxKD/}Uj_dr8Rvz8emBq6$$n5_G`uJ3/2DRCT' );
define( 'NONCE_SALT',       'Z;|:7Ll.UvM00<?b/<(h:);e]nR|kxSnSj3v:cxKIO;ZMhPTiTs?${+qQJbB*Ixe' );

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
