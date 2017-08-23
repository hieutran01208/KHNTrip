<?php
define('WP_CACHE', true); // Added by Cache Enabler
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
define('DB_NAME', '5150598db91');

/** MySQL database username */
define('DB_USER', 'hieutran');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J-I8h}O#Cly0Pt3@>$]5x+AC|FMN7_$(8_9)r{8[_$9,(Be7lVgjrIsdI1(9Z-c)');
define('SECURE_AUTH_KEY',  'OaNUr[}S%As(s n11[=IwXLA$[b@>PCbHQPsP? T?@Zz9y&DGr#r.vPC{Fsl=e]0');
define('LOGGED_IN_KEY',    'l#E/Cq^+@_cr|^^zUTw^&98xY&H&F90R(2{<@9)Ms$Y8 )*`.p9XSVAxOuS%-J]7');
define('NONCE_KEY',        '/F<JqkJiL}oBw&N4T5(DNn*! cGL;B0YoA)9&3{#&:J/}{7tY{BL.ES%#$?1g2JR');
define('AUTH_SALT',        ',4+G_2yJ!0P-CytB-fWmw+N_wB 4D47E#YUI1/~[S6Z %gsDe64,54 K{0Ai(<k*');
define('SECURE_AUTH_SALT', '3,)ht8NDJ|xz^%6EC^wLF)n-6z}oMsjns460@B,opIw%ey3%vUvW`Yts_=c~{@f]');
define('LOGGED_IN_SALT',   'POa5lmm]D9*fP?:EoK]y%*wi=X[`[;9;x;[,^6YSKia<i966<iLv}<]&(ykKVdU9');
define('NONCE_SALT',       ';<9^XS;X!D )$A&b3yfT[#2_}?P=G8pN<R^@E`n)e*L0eG*91Ai7-P?y.ZO(RibE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
