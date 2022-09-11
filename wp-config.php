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
define( 'DB_NAME', 'mmilivojevic_trpkovic' );

/** Database username */
define( 'DB_USER', 'mmilivojevic_marko1' );

/** Database password */
define( 'DB_PASSWORD', 'uA$P7-DhUVy;' );

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
define( 'AUTH_KEY',         'e95Y2FW}H3-7T*%XQfG%cM~1Qg>k>3rjb9!PM@>aRy64W]7_8xW5i,`IjNMFn;<r' );
define( 'SECURE_AUTH_KEY',  'S7zO|81`1[G5LAyj%)QgNT{a:{K-yn)9%<:,~lo?qfd<vE)20y{j*]MMsNzEX?<r' );
define( 'LOGGED_IN_KEY',    'ox~ hnV!xzSn2(,Gh/&uyV@}(=Z 9U0jV(aZ-1%?tU0@U,biq8 g=xF*):>|?LuU' );
define( 'NONCE_KEY',        'Jni#:N_)*-RSPR3n3 t,6.r-#QsomFuc|2q PQ0#=vw/SzsEfoHQB5oB=Dj=LxEz' );
define( 'AUTH_SALT',        'KWjHzs,3.^i|~h}{(S8!`jQc)E9)n|bJ(A%@SO`:>X.rKVnB]b_:WM}D&)FIh=x~' );
define( 'SECURE_AUTH_SALT', '{Lwzl0`-cw:l]mWdb1V-j1X8y]SiK?J{rJDk8)]&$}ya|N;8e`h2zi(XUptz&-uO' );
define( 'LOGGED_IN_SALT',   'F*K?3Rm8gI9X$Z[Lq]F78NF:,^dcVU>:8=us[kL:>+tQ^icES8vy(pa|8X[{+R $' );
define( 'NONCE_SALT',       '>on:?<PDQ?yb7T*q]I~V~%/7Dcm|/M@Q3q(K>j6IWZUCb>zu~Ss.~Uy%7y?O#T<n' );

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
