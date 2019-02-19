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
define('DB_NAME', 'id8734264_gersen');

/** MySQL database username */
define('DB_USER', 'id8734264_leo');

/** MySQL database password */
define('DB_PASSWORD', '4ntares7');

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
define('AUTH_KEY',         'ijo/(86d|yq#C~PvI7FV`) 9x$AIkjT.*1}`1$b(?uvv2Dw8}b=@a9G8?lW2UeD`');
define('SECURE_AUTH_KEY',  'QM~nuJDA}/MvE_7#nEb{CJ$ ;l%KW)(op!h|bO+4Xm`Oo4Mizf*T#_k:NUt?W4_M');
define('LOGGED_IN_KEY',    ':2  C-DZ0O@,!J]YTjmT4,}8H!X~e/ZO!!>L~Of8sT}S$7 A_hJFC7+.wq|zyk{f');
define('NONCE_KEY',        '(9bD_Im$uXZSXzywwnA:_H;^e}zRuJG!v3/2lEUQ>o:-v,4X}[D3;/!Gy:Eyea%)');
define('AUTH_SALT',        'wFa= or6bnE05`iZ+EcZ>:}ym/*q46t$6RH-/*b~RedY]6@S)Bef1,qa>|[w/nOG');
define('SECURE_AUTH_SALT', '3^Fy)SOf_+}=WPLr|)eSpo$^N`}A.1oE0!RaiEy{;{]7[b<qVrgjbqM[3-hS9e&$');
define('LOGGED_IN_SALT',   '!(NoCt2ZzYd[/#tcix:+fT>Bre]c{4AD:oJp,]&$J4&O3Uv5^iH=,.MCKDt${cah');
define('NONCE_SALT',       'bE~!Uzh8j6qah:_r&}^/E%,FNJ(Nkqv*yZ=.X%5Q_)NHDHm_ >.62s+`[Td>:q;j');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
