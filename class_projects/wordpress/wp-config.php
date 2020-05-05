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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'G(/%,k+!Qg3hiV}KVgFBYyN)`@C1y&Qk`8bd42}b0y]3!/ich 9%9lbW})?_Pqoy' );
define( 'SECURE_AUTH_KEY',  'ub?}PUkTMm|/ =$zNWA2PDt)Lsd=U.@Iap9w1C=4T._=C>^gA~J#Ce@-HtXf$v&>' );
define( 'LOGGED_IN_KEY',    'oP4{5vAwodJX,W Iqd! O9$VQh:f Qxi>x.qlX*=_/^3u2&;gzxePu3,]7.Uyo:C' );
define( 'NONCE_KEY',        'b^)!YPU .#jNi[o^ec,*SVT/,h#z`-ZE$?y,0>Pu3:tC:3%M#} ?QrkM}z)Y^Fu#' );
define( 'AUTH_SALT',        'r>rfROR2OH@E8+!aNl8|-q:iU=>]m1M,H$,d@dD|#}Hh[n^fW;K|WY+>|T !x!^Y' );
define( 'SECURE_AUTH_SALT', '!<XoMdUPPO[.4%(Nz}e|>BWgh5h#w[.Q5Y5KsU[3~Y19pv_}j`m{P1yp9a#.??2]' );
define( 'LOGGED_IN_SALT',   'K9oi3Sq@*!#!/G#_qU%#,0Syx2rR;C1zThYBYvk:a$OftcO~nb|b}h;RN~f[^Qh9' );
define( 'NONCE_SALT',       '[5Id3+^xMw)Ta+ui3eF(gBCDN8=l!ZXsp^~{@&3R$ILbRW*p9q3K/N4pO4c7Etsw' );

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
