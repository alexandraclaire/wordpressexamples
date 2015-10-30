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
define('DB_NAME', 'ecommercepractice');

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

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'krPI^sX<R$H <97[]c{rWpj%,5Y5|N#izW|=xY3idq5W/X>v4,E2|2b(z(|4df++');
define('SECURE_AUTH_KEY',  'AxM}D.KF|m+k(`6-)o(}TpfmlPete7Cr*PJ/aK!4CLhqt[7fR6tM27G_)b{}1msF');
define('LOGGED_IN_KEY',    'lW=hj=TMxXqF/+!%uE[t:@gh`o95+rMz+?+-v^f|b+q5ycnEVOttP.hzW;xXq)3l');
define('NONCE_KEY',        'G-491_JoCEsBtl`-xiD9N5d4dcpL,-I)9Ry}5,)/3|^ArEtW|r_j_K~vR;T+z3V;');
define('AUTH_SALT',        '?^X!)|?UctmMQHW^5ILdsUo%E=-+|zT~%-CA0/n!dh_ -6*vK-qP-6g#lIc.N*%q');
define('SECURE_AUTH_SALT', 'kZ}cJTJ|8=9@q+dkS)bgbO:2tO3h2YJ(V$2?tdp uL#Ip7rvK{}.Q_hKQ3Z P6~[');
define('LOGGED_IN_SALT',   'lN|-#pd9-3*.YeIn0l&@?v}tcX-K-0l7;vpaTvC 4a^j6{=GrseO.P7J<ILY|pgo');
define('NONCE_SALT',       '.n[1NuX?(JnqWEy/NoV5FoS+Px|k3*i1-c2<?O]1W[e3J1QQR6kk|LVBf1C}B?k:');

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
