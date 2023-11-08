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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^imy,|qLcbtMG^(OI!n#(z@0GJV>O|#k]6,,^g3Ga?Y@_gv`Ma3<%w4^ct*O@JI?' );
define( 'SECURE_AUTH_KEY',  '-[M|$d=rji/Wiqb#?xrkm1B!|C/8=Yy@%25oo#dE9M@/AKVG9HIacTuln!kA|o92' );
define( 'LOGGED_IN_KEY',    'ft,iDOAL3Bu~3CwU&8[HD3^-gZ~E(Bc-J8X;: Xt``kz>h$@jm*9&x+K%L#i0xc&' );
define( 'NONCE_KEY',        'ZOz!?s97KC@&qSNJRME7})<j9,>rlh+quxFX];|O?5w3B#A+S(U]KfZw3B4=Bc]]' );
define( 'AUTH_SALT',        'rb`A%isV>GxVpwRQnuag0fS7~FsZnd$hK&o]_L*0,r8&4ypE|x^<.V4dgUIg8:k_' );
define( 'SECURE_AUTH_SALT', 'L,X>A],I=CqKTD3 cD-KEioe)Zrbvl%h2`Zf$v3U]+c$b%)?0}FBF8[@3#xqvg4A' );
define( 'LOGGED_IN_SALT',   'G0,:e{xRi^iQO/+hVzOSwkFc[3r<~?*$D1^+~]i]lp4B:-z%$CvIs2dkY#<Dy0iV' );
define( 'NONCE_SALT',       '.D,ca;47[a_pHOQ3uo4oThvFyt`#,sMVR3R+.UANGKo4X56@)(6>!{J(//x=Np!H' );

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
