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
define('DB_NAME', 'haha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'hpa%0s=CP<)oXIp?w#`jPj|g$/aE~du:FGpo(6dmg9&l4OXT6?Auq+)@w3EC)o)/');
define('SECURE_AUTH_KEY',  '.[7lOy:u7q/Ml>pG]IT~=[G|lY~?@e<mA$ RT9L|Jn%H}Xpg~qZmaP}m<bnEZ/C6');
define('LOGGED_IN_KEY',    '/cjHy^Nla?$_O}.sm ~!>t%{uvfIo:=~|u[<Ah!vc6TnwMppL5Opxn :2kQl}z{c');
define('NONCE_KEY',        ')CiV?z7,;jrx)UNDp9TH#CvY$W8G(N=233[=#,}3V&o/N(n~!DCY.2v4):AK:?;@');
define('AUTH_SALT',        'gI1;E7I<uAr0z,r`=OtVdN.m_m[{AH@gv)AEd7?o&/nH_*l.1dML,K*gV{1R_H9O');
define('SECURE_AUTH_SALT', '*+H_=Z91%a3N6Yez50s<GI9]bpl[{x,G;o|S(hKZQhM{q>jtXAO5:7I~JkS+.dHb');
define('LOGGED_IN_SALT',   '>3pF(E6]HJxxnyqRnXeFhIW?qK}o +*@F}WfzwwpCX4P[nl?3Ko|M.(+l?xI(&h-');
define('NONCE_SALT',       'V*Jqoyx-w,:>vc527O=5A]GT84QMoyv|x$tscw1+E}%`u$e8aF}mo}XoH,q?SW7/');

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
