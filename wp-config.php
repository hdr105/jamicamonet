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
define('DB_NAME', 'wp_needpi_db0');

/** MySQL database username */
define('DB_USER', 'wp_needpi_0');

/** MySQL database password */
define('DB_PASSWORD', 'Bu8CRt4EeF6Q2br1');

/** MySQL hostname */
define('DB_HOST', 'dedi1732.your-server.de');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'QP(YUG_D-Hy|#3jBX]Ch{s,;ck<9F8MLAl@^6KaOpe5!0JZ/`.2:qoR?%W~rg+u@');
define('SECURE_AUTH_KEY',  'co1s8{gh#<NV`MYGtFR-C0JEm6P.QB3U&@?qf:X+9[iy@%SH)],*|W^d7knL/eIv');
define('LOGGED_IN_KEY',    ',Hs;9CJW@23X[?%6}kaZ-B@K0ilpy8~^qonhVug(<eUNd!+RrEvF5_S/]T7j.M &');
define('NONCE_KEY',        'spL<T9.03hQXSik5MIU7?z&mKN+Vwg6,# F|;aj_un[EGcry@]8H{e}xAb/Btdf*');
define('AUTH_SALT',        'daq5}DyQ{1.m<E7iubB;Xrsh@ O-(tJ`F*+ZjoRkL~AlNCf%Te&]V4>@g8[YMW0?');
define('SECURE_AUTH_SALT', 'P^_}SYD[G#)J4]d&6WU>TumHry.ELn78;Vvc/`lfCFt!%o @0<B*{,IZz+KRqwa1');
define('LOGGED_IN_SALT',   'auMt !*~#m|6)>2]w.B3IbcRGF0nC^WT_lodV(hN&-Jsy,8HQ+@ZrLqej<[?:KY7');
define('NONCE_SALT',       '.w,C7{Ph2R@5M Z+)lBJYe9dGNu^SyQF&|v`*xXqU%Kt-?}I[]Ob!3o6g1L4@0nj');

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
