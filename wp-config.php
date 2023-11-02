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
define( 'DB_NAME', 'ltw2_nhomA' );

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
define( 'AUTH_KEY',         ':$[z6LX#05yjDPRjKl]mFl@RFouM9U`lWfk!$}z$c;)X$1O~=Vd,8>{7o)1)G_}.' );
define( 'SECURE_AUTH_KEY',  'Y2/#BM>PH*h1ghs1j%pTA89VFWYJycY._6jED;5@ZACyA)#1O(?Cs1cX=R+FTtA ' );
define( 'LOGGED_IN_KEY',    'r:~77uMQErQM)jy6VN5UAU<#LD5a[[QJ(OjjhA)oMmJQvvX0{j]J`U:!Uqz65T~ ' );
define( 'NONCE_KEY',        'IN-:OnNo}@q7As: 6Wx`+[A[g{J9##}XUk,NEc5mYg`~TyT?^BUIMRBnc7BD-ap{' );
define( 'AUTH_SALT',        'RpH(?-l>zG>QV;AsPU#[Jn0 3AfY^_p:S[@KIq}v89StnirM6S~2$/7[F}%yor]|' );
define( 'SECURE_AUTH_SALT', 'lVyp.W<LaR@N+3{}.}GDz NI4*5V?Rp(:IC6~B^f{ v?CDFWY W_iku$LVLuCMfO' );
define( 'LOGGED_IN_SALT',   'kmdO7L:5J1}$LBEOtQ>0:f((iKMD,47BnDxCUdiNxb/Zp0Iu7;K1PG}(sFpPIi<1' );
define( 'NONCE_SALT',       ' Vf7=e>X/Kbk<.(KG2IeT2`Lz%X a>hQ?Kd@=Q?^e[Hj^EoaAHBK1z#-cdt`I)k^' );

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
