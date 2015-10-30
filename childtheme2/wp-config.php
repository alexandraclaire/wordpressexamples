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
define('DB_NAME', 'childtheme2');

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

define('FS_METHOD', 'direct'); /*THIS IS ONLY REALLY NEEDED FOR YOOBEE COMPUTERS OR ONES THAT WONT ALLOW CERTAIN PERMISSIONS-
allows you to access the themes and plugins locally, not just live*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T.l4O4eQ]3Y6{O$(|>EWZ _FQ?J-8];DKPhH}CYT=V}7?<@l LS$FPM+}bk?uA?a');
define('SECURE_AUTH_KEY',  'e<*g(SffIauTn2+d;|A:[BB%HP;:m,-wfmb%Q+ow+PJ(n:2@:_[C#:zTsoVi;%w<');
define('LOGGED_IN_KEY',    'o&1IeK#fFE*ZXQZD+~Nq|g:~Bdf!^08,3#R9n(Qfv_,sqo(EDPko3PdrwhWWoD-:');
define('NONCE_KEY',        'a#P07+e4lx#(gRhe|=dp<Y*0Q}q%dt]ap*g(,Ll5%?ILaCE`e-wz^Y-4a/;Q7;f:');
define('AUTH_SALT',        '?3rkm~vD$7< m-cP5<]7fPZ~B5%5yT2k.#y|fF;G?}S3HH-|Dzyi8lKVe:[fM2us');
define('SECURE_AUTH_SALT', '%&p7Lqh`6AkbFxxRnU5h<,K0I[v,&d)#4%3W[2oh0ag<toY$#.wO&dzF.qd9e>${');
define('LOGGED_IN_SALT',   'EL.MW)TKT7lQ=(].9}qHH+5Tn>=ah@FFu3/)bW5b+y,;_RN7ax|pMMfCwrtb7#3o');
define('NONCE_SALT',       '3g?DO)k)|~Ah$D [tOu3;yt,j:vzxd|V- b?1k1>+#W()Wl;5%54Zo%:*/CF1g2i');

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
