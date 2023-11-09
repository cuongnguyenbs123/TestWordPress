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
define( 'AUTH_KEY',         'p&ca0K1|Hjgy=q>F%MSIHsa#2JTm0KF}r?S30E)pU;Ozb5zt:gva)&z%s6ft$.C|' );
define( 'SECURE_AUTH_KEY',  'n,BIR3rrD&Rw|@{<od]4Ki?sc05}(0:r_!tPZ*5*NN>2~QI7H=a[@|O-aJp#JVSr' );
define( 'LOGGED_IN_KEY',    'MvD(%F$*>zRU1[4,~Vj@+z%[H1{3LYsq?Gd-RnJ?b7M2CU f;NZr|%kY/;,5CBzG' );
define( 'NONCE_KEY',        'pz>zetKNxdxOK6}XR<(0y;RP$aB;i/+zE7;J!# OW9Y}%0`gRw_zeRX]*UYUmQX[' );
define( 'AUTH_SALT',        '8#xV|O[hb]e,oM|@m.B[go=7OJ4=CI^z4zb0!]q^_=|$/E[9QllbiBI6#PmW3@?l' );
define( 'SECURE_AUTH_SALT', 'J~MX,)blY%^tBewT#;PX>rgWG&A0P]?@.7sR;||Ft=12w1YC_?n_15SZ*#E&f<PB' );
define( 'LOGGED_IN_SALT',   '%B1<G57<Cw[]2uN~v**3IXFB|vl=5pPn)6T5Z,%v`8S2Zy<yAaP84R4/@Ten>>Q>' );
define( 'NONCE_SALT',       'e*I]uJTPf>*)3G@24DrP@,F+zxR+<,Vje;QZa(ZE^4*9<Tdyn6HNGS+|LUohB`bq' );

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


