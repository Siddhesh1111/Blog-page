<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'do_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hrzV@Xf3%UQy7$YE/G*=TE{!G)si /jGo]rhI6&gZ=N|4$hm(_lm:97[|Wi9w(<=' );
define( 'SECURE_AUTH_KEY',  'qvl`k*&} s2gn3C:7*C*Y:V1cL<X!I-}j{1?c&X!85iOsT3bvlEgY5+Tnj=H%i?#' );
define( 'LOGGED_IN_KEY',    'T/uZ$K[BOf~Vnx,a=mRc;ibOmAnL<8hAz%ayhS/[J@wLjJVa1iUePe#{a%]!4W:{' );
define( 'NONCE_KEY',        'Ygn;RJ@k50W1nZ!?_qyBqzWJAcL9fz}z-&yt0l`Gf}0CGJo`D~<3i>)rCXH;F1@@' );
define( 'AUTH_SALT',        '!<QZR/nq}YIj&tKtaMwLz}uw#mjn}gX-[.+TKig.(tZ/i:tTRGMS5q xuxa%$`j8' );
define( 'SECURE_AUTH_SALT', 'tS{Qe4BU1[/T&J@>8#ldB66fC)r}96(!fu0>)NlSe^~PK85.z[1Q/VSe0Bwk*JM,' );
define( 'LOGGED_IN_SALT',   'Fwr5w{ A5JlpeH?#|4}m3dw,gOBLd`9gAO/|Y2g{NL@QV:CAH-CXgKi6V$l^wJ|$' );
define( 'NONCE_SALT',       'y5A8>q@h`5}T3V|0SB3T7@!{BCi7&q/v0^@ ]}S}I^*To~IXMo?u3z <_Wk/M;+k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
