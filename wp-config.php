<?php

/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'mmilivojevic_mportfolio' );
/** Database username */
define( 'DB_USER', 'mmilivojevic_marko3' );
/** Database password */
define( 'DB_PASSWORD', 'OPm0_CxUXP=0' );
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
define( 'AUTH_KEY',         'xrd7GVNC* U[uQg~Cm^J4ARrSSNMS2C15Y~$0 e1#Jf@iS=@a,Ysw:!#<H;fT)5g' );
define( 'SECURE_AUTH_KEY',  '{-0&N``9T)s`Q@FwiR2W4HYj4=WTR.{t9zPj3`&M7-]uCUDJB7< 0HKS.Vz#5ZG7' );
define( 'LOGGED_IN_KEY',    '0l4+~zT*UMFpgdl~n!/;Jef8S)Qr$sngu?3{N1KGeCg#a3M(=iu{:t83nY?La7?W' );
define( 'NONCE_KEY',        '|e8/1AuwqmJsrMXG.TgM!;uFr:HADW7vi%CTTU9}{Hua5qz|9=Wpg8$>U/ZFVY u' );
define( 'AUTH_SALT',        '$r11j]ihSTwzL*-.j[LPJ7=*FZ>E OLMKx@M#!^:m01j)Dt$kHd^FVf?9w`uzB4(' );
define( 'SECURE_AUTH_SALT', 't}HaClCA9{PG33{H)CG}.m@x*9.|z)F>Btaaph*1Mzg{[A/r?RFEP]?[Nu^G(rpE' );
define( 'LOGGED_IN_SALT',   '!YGI3vb1[U:*A#sZQztB%)4([OtLeWKOC4G24,pnmZkWu)Pu|9dE;rF(fp,5verp' );
define( 'NONCE_SALT',       ')L7d/q_V-@3Hup BR0/4Fo91@?EJVm$%c)f<1<SbMS]dtS}Rx%  MGaSY}>QB@2C' );
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