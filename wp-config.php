<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'mmilivojevic_projekat' );
/** Database username */
define( 'DB_USER', 'mmilivojevic_projekat1' );
/** Database password */
define( 'DB_PASSWORD', 'Ri*#h45=T!Ba' );
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
define( 'AUTH_KEY',         'd-^Gy$*ZU`p_4hH8Q5mnQxL]:hHq@T<tW}`GSaW(dMn$w`yXuhk*axp:({wP;PSI' );
define( 'SECURE_AUTH_KEY',  ')f(ANOng/+/E;Y~YzHv%|56$wiu42Y@jlSUPv4C&] #K;y]7Z7y]zrL./>oe4>g%' );
define( 'LOGGED_IN_KEY',    '1 M(fASt*w[(Od-jM?FeO%G:jYCh{ QW1B (]U7PRuh%.{Ph[uAo$R``*:Ni5F`V' );
define( 'NONCE_KEY',        '!<~$9MZF{(B 4lO(L4P8x)_;0+TnNx)wS:?El|]TiVL35{QKw:i=.(.X]I9o86[|' );
define( 'AUTH_SALT',        'NXk/1V<pR -3cQ=(q,0RcpZ-/sH#bPlD^KJ*U_W}<1*n3<kBGg,zPHQM:k|.&!=J' );
define( 'SECURE_AUTH_SALT', 'U]*?Um}EW*%!{&u)q5*sTJJmk&%T3GQOW)zTB jZbv`0a^n*<JPo)Uh$0Rz:^5]-' );
define( 'LOGGED_IN_SALT',   'e*g3_S8#O|5BJJ+UFolA`l7)Q7Y+Z}IIh6d<YD2Z3i,tRk%b+=2;Da.M)*nUKKw]' );
define( 'NONCE_SALT',       'WKw2])nLVh)pozZ 7qDWs2ClaW,*nBFzmfW5*%D`_iDCr@hp_bBAiuhCNO^hgAVe' );
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