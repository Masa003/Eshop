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
define('DB_NAME', 'eshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'l=<`kwIJ)p{TpD[R?-e2@01MA6kKr*hAf-Y=]J2L aXzJ}E|93^tDCtKagvhHjAb');
define('SECURE_AUTH_KEY',  'apd~fvz]W]wTiOv-|#xLHpg<QDO*|`TY)MFr&oCJ7s$ST(<VhuY<8:AB@J,PDAAf');
define('LOGGED_IN_KEY',    '_*Yn7yk8qT^A6F9)Z2x)78E%_IHHsgys1D6Ze]jh-js|pj%zc3rAZ:n;bK5ss3q`');
define('NONCE_KEY',        '/+nLRQX.8q,fzIi)Eu,Cbbd}){b1_ZlB& suBss9^5mxK-:q65l Zh~o:N[)YQ/R');
define('AUTH_SALT',        '/1~rDu@HD(io-KmalI)m:maB-SqnqZuvU<GK/z?rkiF[HVN<iw-WrqH5<n|3ahU?');
define('SECURE_AUTH_SALT', ')c7bEjHS0]2q.)(L`fLDC>jS~d%a20T/l~=?[N?@W7/WE5@6]*5g`i,WsB%w?`Qi');
define('LOGGED_IN_SALT',   'sld>IMO8Cnl>/.Gn)}L=~U`{.7z:{*,DB@^K}4Iw8rv)7#[gB@y3.,1CpC)ju16y');
define('NONCE_SALT',       ',-eX;Rum YrUBJeBPVG+?F8Q-^zaqT;Q;lDC5f4Kkt@:1et5PZ8//Tjx{(LI6myz');

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
