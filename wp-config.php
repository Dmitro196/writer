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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'y0V^|N.9-T1HE,@1l*zHpbKwo `B)fs*2T0PO@L,H,CC5[Z%`]ilW_i?BOr*+p_I');
define('SECURE_AUTH_KEY',  'Eva1<a;mOih?sX=8UvfhDgQ!ee%`[=7&>xK)KC/mY:;AjPG?V4R#6#M~<9qsro R');
define('LOGGED_IN_KEY',    'SF6QOko@.I,>D!Pb>95#rq`I^Qr=zf3qR,0OaR}xY`fLa0n<)8=lWSC#J<;Ac>Wb');
define('NONCE_KEY',        '}CV7u]QC(XE9m=At=={I{.$C;l`{~TWvmhPJ~i5!9TGuMS.M@Ob*@nJG{msN*J^s');
define('AUTH_SALT',        ':b;htg#An;3<=u!vpG+n_P?)2a+F?gONCmqW^BKF35^uvCB1Hrs6BkE6Y iJqAT`');
define('SECURE_AUTH_SALT', '4K7NCN&[F>PP%dY8XF5!--(N,.5{o.ht^sg:yU4),8Mj1Mx)Ec<]4y7>!A>Q5V6<');
define('LOGGED_IN_SALT',   '0;xvV+us-h}Qa)e,d1e[LrCJ)w0v537X,Grj!<DM_~%i<jwNUwov/q<}?I=gktU`');
define('NONCE_SALT',       '|I>G!a[_w,+ 07WWl1iCc/XC]@1N4$kJ)| M-{#]jd8m<7[gw[.:zBISBtkP_l$z');

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
