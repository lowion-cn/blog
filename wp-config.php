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
define( 'DB_NAME', 'ser889538267703' );

/** Database username */
define( 'DB_USER', 'ser889538267703' );

// define( 'WP_HOME', 'https://lowion.cn' );
// define( 'WP_SITEURL', 'https://lowion.cn' );

define('WP_SITEURL','https://'. $_SERVER['HTTP_HOST']);
define('WP_HOME','https://' . $_SERVER['HTTP_HOST']);


/** Database password */
define( 'DB_PASSWORD', 'wUMhI7t8StOP' );

/** Database hostname */
define( 'DB_HOST', '45.154.13.78' );

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
define( 'AUTH_KEY',         'HK>V%7z$f=>=9qz0rblHQ:MbRm0|0t6x$R,>E^(;-OW3SL;~Jg`T Mb%1d7*2p1;' );
define( 'SECURE_AUTH_KEY',  'm*[Clr n`VeHhePa5i_G:W9;aMl0TWQ$1QoUmzN]BK#z}dhSno-A~Dqs*MsnvROz' );
define( 'LOGGED_IN_KEY',    'c!SN=k+B1{OqAusLo:0!nI  ~HgZXH^Knfr90aJcIDZ4r7it(LVI; ar+`p@:QxN' );
define( 'NONCE_KEY',        'Mk}Mrnbj-[_i9SBW?pMS<vJ`ws_1+;7Sk?^L |~?HFa?g#=4B }{z[uYf*g6qWik' );
define( 'AUTH_SALT',        'kYUVQ]OE% [4rX!Rhlv!U?^rtXfr([e_x)fw4/)Xd=V`>XX 2D8#])1(8jV]PS+;' );
define( 'SECURE_AUTH_SALT', 'nNu0j4gY|cl1#2.M[mEm5o/y02ITB+0=K?/tMV/`q1?>]D%K*H86#*i6I65=5[{N' );
define( 'LOGGED_IN_SALT',   'np6W>G_*XvAacTF5TLzBzV`A4YuH/89o<8XNyHFN-X+C6#n~E~WLl[TV8U7MWjZ?' );
define( 'NONCE_SALT',       'FI}y`wl3U=mwR7VbTk#.hfN|{A/>H^.X@p$J,S$W$09&CEn|vMNME2q`k^^-x40t' );

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
