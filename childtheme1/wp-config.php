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
define('DB_NAME', 'childtheme1');

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
define('AUTH_KEY',         '0lOv@OlgY:*V|G-E8e}~XY.tMRO)oAS3O05)*o|Bb{x|M>OJZ`||I!49i6Ysm,[u');
define('SECURE_AUTH_KEY',  '&jG~i/.&C3{,VJLun&3llI6>70`.68)^,<bNYH3+2L@!*!gvbnI`|w[s@FId9qZ4');
define('LOGGED_IN_KEY',    'BqP _$)$+5m%i3.<b%O-+NN!=N,nJ_NxKFveDAQ^P+&{sz5>-A yjGAOir[G8P+;');
define('NONCE_KEY',        'l9O2m9W*q+|o-6B!$vOyl8<mWS&#{XOK@5GZr-R{|IT~4GPL^)-f|2_l<!7L<ti ');
define('AUTH_SALT',        '-i$g-2FLZ~(kSYQ;9c9+`/ffo%C,~`p3^mk/;s4+x<Sju|(-`{7iYbUL-cW0-Xt0');
define('SECURE_AUTH_SALT', '><F+Bi=*9n0{j(,yxH(<LN@|832+VUSFHBh15FHMD7u7 +$Pi+IFz=8`:{kvS&BA');
define('LOGGED_IN_SALT',   'z4WwKkKmi2)dtXt~R%! 3Wc#K+GiN 7HmuR{H!$-k|wMV@Pr7-XC;Rz1cAEm~~jh');
define('NONCE_SALT',       'gZv@H=y}%+o?{pUXd,qN,4LA2x*i_/F}.@K*EH|H.W8Jcuy+X]$nKXMSI?S{-70J');

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
