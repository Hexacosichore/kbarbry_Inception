<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '${DB_NAME}' );

/** Database username */
define( 'DB_USER', '${USER_NAME_SQL}' );

/** Database password */
define( 'DB_PASSWORD', '${USER_PSSWD_SQL}' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x^LL:Yz}X~->6KSn&n|9za|!MY,9_=2U;7PiXABdT=k-?+EU`u;yNP$2e?;cd>&q');
define('SECURE_AUTH_KEY',  'Bld:kt<tCmhg+7ae-xpqD>kP~;Y -b6e1F]Ci3uB^}ralyfS,ul76-27} La!9|.');
define('LOGGED_IN_KEY',    'O|n*yx4GQMy6>}<Sm*>}pR@#&-$o*2!-XeQ7`0I$MmD@.)+=YbtVMw-_-+y`0o!K');
define('NONCE_KEY',        'gs&Y<SmOg!]na2`4!k7eI*_<>/t;2R62IQ&b}I0w6LAukxIP|-G}a;LAI*rp-[^P');
define('AUTH_SALT',        'r6ur4gPqGz*C=^Rhef/rY5d2=uTCtq-qe7EV]`[zgl+_N[w7g&(K~x+4@Z-}%OHM');
define('SECURE_AUTH_SALT', 'L}?tA!nU1-?vpEUd2xA&ViHJS9mOqO]o3>mU&?g*IrW4C.ydvdQ)OSvlFGAI`5C3');
define('LOGGED_IN_SALT',   'l|/mS)0FgAjyx9BB2Ax~[3@ )4H324Y5K#tjX+J-v)119DMIPP5F3R~v0z+|yCn>');
define('NONCE_SALT',       'R~O,FQ$|~(:;!$L$uEkm6u5=WRA]uP_]duc]`Da?Kn5Ox-deVVY#(r1S$^clpIm[');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';