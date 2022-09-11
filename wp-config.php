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
define( 'DB_NAME', 'mmilivojevic_roman' );

/** Database username */
define( 'DB_USER', 'mmilivojevic_roman1' );

/** Database password */
define( 'DB_PASSWORD', 'E3mQ-44GX?R6' );

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
define( 'AUTH_KEY',         'd{-HdYr|#O&{,>P)8;1Cr?_p=Wum<gXjI,U.F^]Em(>,F0G4$4#1}pElM(Kx`AU9' );
define( 'SECURE_AUTH_KEY',  '0cr6egNO@F/,]}hN,mMt-@42BW+zq1NcZ0H-*/Mrr-%DlSXMp=l`WQ&J_R8ii=[{' );
define( 'LOGGED_IN_KEY',    '1/628%k]4[*YL_!6 L2x83EOqI`JvpF$>A/v[9b}{3zOf_U>9H@%$pL&5OdQexNw' );
define( 'NONCE_KEY',        'LT:6e9zMM>4bYu0m!Oz$c=8w:AM3a<4SnbK0bGT7chZ-vXye;kyEBfE$Dl+2IeP2' );
define( 'AUTH_SALT',        '@n~HO>J0K{ ^0b-(Sb5msKgTiQ+P2H2wQc=.D|L*QpD|)rl( 8:z~9*l_>?^<sF-' );
define( 'SECURE_AUTH_SALT', ')[k=yNXt6nIzY7=&i}2j#yFS7>TaLvT+K(}XDToX)>U}+(_k7]</8WgYj&/xtY/>' );
define( 'LOGGED_IN_SALT',   '&Wd_Eh e4b<fin{YDAqZ](EpF-fOO]PbVm%Jxz7uVbcvfpjg/r+nU|uJ>/jh,d$.' );
define( 'NONCE_SALT',       'z{TLQ=%R+W]-b1D8k-vJCB}Z?pk$Q5;du<xR_+PqOgs#28~|[j|~a$JUJ:]GD?F}' );

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
