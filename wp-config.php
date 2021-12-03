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
define( 'DB_NAME', 'traffix_db' );

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
define( 'AUTH_KEY',         '7.:+H;Hy@~:VVv7t8fYRgd@^~b[awo%d3f5qtI_dFIS*c3d`J[>0l(2+=3@6=A1h' );
define( 'SECURE_AUTH_KEY',  ' 9d^-j#!:u4II_am0nK!G-rU}eAg}G9H?@[gX?p7-SOe_xue_lV@Sd-(*,*CN|a]' );
define( 'LOGGED_IN_KEY',    '`3;t8U>7}n|ee4tyzUcv[EcVh{:N&,3tw[B8Mh3,lbj(#Mhw(VyGuS%W@fW~!ZPB' );
define( 'NONCE_KEY',        '+e^ijVC(!VS-kdY0k/^f6gZ64LlNCWu(DX}q1uoihPs./3J%cz{fXB,=fiQt2+e{' );
define( 'AUTH_SALT',        ',Z2[-&*eJ:oOclqie<Uan=;243`Mn|@71}-Stra(d6 D7l0n_N43wQA(s!,]CGVO' );
define( 'SECURE_AUTH_SALT', 'm[6QXn*9@_T/vYI~QN?bwiud%{B0!dDvyoaHhX,Y7`VTtOhPOM-iK>ynWThyxuMK' );
define( 'LOGGED_IN_SALT',   'HacLu7Twgj!3JN^p,.k%$sE{$kM{n1yr&-& Hs44?mFUhp?-4Sl@3FK|%s{x/6-:' );
define( 'NONCE_SALT',       'l8os)ppu|>f3M7>{JDl@):z%{K=RLK~%ci+Lk[*Dk:`V^gykc&}n.!6i?O,sShES' );

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
