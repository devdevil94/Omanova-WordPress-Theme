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
define('DB_NAME', 'Travel');

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
define('AUTH_KEY',         'uez/:sc2u$+!+rl5OZ:np !u!*__|[SuyI$B U]KJI,c.xB?[;]]S=x*{@ZINA?3');
define('SECURE_AUTH_KEY',  'u(>HE6&BR3UfKZD}u zacn@%CMQ[E5yR$a14 VFXP>oyJZAaz0,vQ/V(Ai(?$sSr');
define('LOGGED_IN_KEY',    '!r3zYqORk45f!in<f.Xa[Ee:0tZLru!qf5I`/g3,=_LKxDNJUwM@xFWWvc^X@BO>');
define('NONCE_KEY',        'V9c]rWto^7QCJ$SqC9azGEWtM0e&)RflB!|%[!a=){83zJ%Zfm%|LCx|@`gX#b6V');
define('AUTH_SALT',        'xz:vP7mfR}5*u`= SiU.9=wvt*7%#$EYQS4~1]|/gw@DYV/mn#%okjELWZWc5+z;');
define('SECURE_AUTH_SALT', 'a.j(!q+MhkFWurp69K`0S)u<~x^{1T$H?mJ,lW!Q I*BnR1aQ <s|./w#+AVbr+=');
define('LOGGED_IN_SALT',   ']JD>05przo;>Kj3/$?E )M-C!(?|~h$tahYM)uhg{;)4cedn=fgN?&SIha2C%@,z');
define('NONCE_SALT',       'ito8%)o%pQ^:|)Kl0-t96)hPkv/I15f$&nFM4YG?5{[>].7-sGjNcQyeAMriBu;n');

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
