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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trade' );

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
define( 'AUTH_KEY',         'k}.5laKW/Xy<Z:H0:MB040]n/9{{jboX[~oTL*:[4UL_]{2(bJCTko.MnTCW=XEu' );
define( 'SECURE_AUTH_KEY',  '[}`0vK,$XJ~Gy~0~*_u]m!Lt:C9>bx^nARxrsT9*kvL3R>n~Q11+ E~S{wDlR|(b' );
define( 'LOGGED_IN_KEY',    'A3zH9=9%a9+x@!ePxmfQO}2b 8*q-@[Ooz=nC93!w4kAtD8phj2B/6t(3@=< wXs' );
define( 'NONCE_KEY',        'xe-M<W0_f>H1UajgcjT[/C,2Q6jzKQX@BfU*uEt)M%yy!%U;{?p]]%NTYw!mAgB<' );
define( 'AUTH_SALT',        '-7%K]B^A3Ro0`#]>syY!s*}sIA&gca7~SsS|nYw9?x91EhH%XGvIzs-+XY-(5%;W' );
define( 'SECURE_AUTH_SALT', 'TGB?`l5x16*G_&|pp$7U_(Hru*>5p;ArCY+lEC-F;_JJZd,@9~Xac;#*W79`yji!' );
define( 'LOGGED_IN_SALT',   '8UXWf:2 M`U1):Fp{]`4<MWRun<q[b|c}TnUD0y,IBYFhwp:D-@;e!>+XlME|i.%' );
define( 'NONCE_SALT',       'q`(!7/f=!X`m4bxR0)Q{H;a/(LQdO7PItUN2%BC)!l8mB!d_jcvT}k@=vA|%Km!H' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
