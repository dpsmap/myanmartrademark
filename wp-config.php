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
define('DB_NAME', 'myanmart_mtrademark');

/** MySQL database username */
define('DB_USER', 'myanmart_admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin11181');

/** MySQL hostname */
define('DB_HOST', 'mysql2001.my-virtual-panel.com');

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
define('AUTH_KEY',         'ki2[%[2kL_egsQ2Y}-(!=O+}g@Ds?x uG~jo]}$Zq&v;-`x+)0YZ-0ulacB?>`$k');
define('SECURE_AUTH_KEY',  '^qhG#)9zpVwd71D?)%^<3I>tuppJAoKZpPT`#.q*?*oX/q@v[p#yiC/PN~8~ JpS');
define('LOGGED_IN_KEY',    's,8EZV7N 9)`Z$lWFCRyEB];+cu,QO2wf;IC,eHKPAl.|9y`ZhxB97x18<mdj+LF');
define('NONCE_KEY',        'ONqS2+|+LZ2Jbsq%c-JhzK8gU4FFYFP^9F6RJLt^935|T[)1#B)oESENg<fiPf0z');
define('AUTH_SALT',        'b(;{Z|M$lqi#JrCVl*$,0K~/=.FRK8_SSJ|=-]@SdQc+qi6b$V7WlRvI812a}5w4');
define('SECURE_AUTH_SALT', '4n2GtHY#MN.uK#9#xH2G&/75#EUv33Q;tcE@RKU!x]9|&^0.Rce|cPyR^A=}e0_x');
define('LOGGED_IN_SALT',   'BWeC&50J[x2%A!q_G~GAs#)6Pj:Y/T1{zMgO]7yyYLYkulgTn.J)WxIRHE9xK$SR');
define('NONCE_SALT',       'ElN:VoXW@xAZ]@@ih*6=fCTmJ@M$plJ_OUrN8tG{eBy6g!@uQF_<.2jRw)G%ltDQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
