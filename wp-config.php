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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lmsindustri' );

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
define( 'AUTH_KEY',         'e<$FA{ww!~~haOSZV9CJBACju4Z;+W_San,-(p@RnW+|/9n7Y2mM$p8jYaiK|(EH' );
define( 'SECURE_AUTH_KEY',  'Wk M0kBO4]vQ|hfkB3ivS-W)2]TMO+$otfIDBiS -HkB5{XkfHxxaHa? (lV<YU_' );
define( 'LOGGED_IN_KEY',    'sOSRZ634kL64>@nbEu7A=1*hzY[f6G@ eGUywv>s$ki4bPME#G@Jx@3q<_Ag}a|&' );
define( 'NONCE_KEY',        'TDsBMy B-8}4?so} %HO5} X!N0V,N7+@9Aqh}Nh 0zzaAi:A7q^MSNelG 5/kvX' );
define( 'AUTH_SALT',        'a[g^(0^@89B}|v~b~YJ#<Zv~qd8f2?FDD4PVUgu>)rQztmTJH|(F,%Im ]*ePo a' );
define( 'SECURE_AUTH_SALT', '9ksxE,JYo+q!>n`v)|F>psBLFgwl<SN4U{#&+ILQ.hjbqY7 -ODbL#~^=74;dv||' );
define( 'LOGGED_IN_SALT',   'rq3_-D{Z3;Cb@h^@*AV.}M|+GzTUpQQ< KYQFDHVayN-XHVtn=PRwr9/CJ1:S3KK' );
define( 'NONCE_SALT',       'P+}&zl8Za:Kd!3bD&~/Jo9#Boyd>fzhE!X=T:_E=gTE>V;i|f4&8r.WZ)Ym4{`<a' );

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
