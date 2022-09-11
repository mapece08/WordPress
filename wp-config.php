<?php

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
define( 'DB_NAME', 'mmilivojevic_petak2' );
/** Database username */
define( 'DB_USER', 'mmilivojevic_marko2' );
/** Database password */
define( 'DB_PASSWORD', 'RzvUD2s^zZwz' );
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
define( 'AUTH_KEY',         'QFpmr*CWLa,tEW8)(.37eg6hYjQ+:8!8h:cl0?P~gp `{3F uNg}9^x^JiX,1uyg' );
define( 'SECURE_AUTH_KEY',  'nu_Jgzq{SH.ob4z_un(vJ:SjmwKNFn6=y->ugD=a<slq.q ?-#S[W_En<:{rMK`-' );
define( 'LOGGED_IN_KEY',    '78h!:|/6boH{Y2qc`2Le%A{;cjjBY$kV#FL`8sfV=`kaX ?8PTLrU2o;Pk(<FFhR' );
define( 'NONCE_KEY',        'SOLOC`/V.+87WKcz=YHrVO>XRI vC!t+ORj|@Y0f2r5 guH+Kfv>*a`e|&@rj0*.' );
define( 'AUTH_SALT',        'f10rMG]Xbuph&!-1m4v.JpqR>`=/on|fBEN<tiH-WMims]@[#>A>QxX.AZ9lw;PH' );
define( 'SECURE_AUTH_SALT', 'OU}I)w{WQh>{qb0/H{21yA}? 1GNhu2_/qJs_H_M+kl-.+Vz99NRRwfsy2C{Q%/v' );
define( 'LOGGED_IN_SALT',   '#$~t#=CZ^@#!8Fk~r+@iZk&+Q>d.;3C27W@rr@Pa0Z~->ju1(zaGcVmeXfcx.51Q' );
define( 'NONCE_SALT',       'piB$$Da&Z*i|1Hq D~=zO6;3Y{zR.NA-Um,U<{ydmd]+5K`bj?7<??U$keVG[(vz' );
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