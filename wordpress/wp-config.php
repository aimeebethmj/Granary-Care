<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'granary-care');

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
define('AUTH_KEY',         'PZ,EIu?V`Oh@S@6V7:`2}U6FMHcfm,& $HiA7Mbd H-[v[zp)/x&?dY@;$ihh+so');
define('SECURE_AUTH_KEY',  'p1>+E/EH4vY]d3%Su&-xtppM`K5CBzgJqA-O.K$zXYhf|RL~~LN&?kbt_I^%Rez<');
define('LOGGED_IN_KEY',    '&P72 }tW[ACMG7g$=N5eimrZ%0uf/tK}z#+siK{0R37arc!b7OWeQxB4g_}#.C/w');
define('NONCE_KEY',        'n$Q4^XhSl-Sbz&=2#ED Hr|^%;m^3RSO?#z9@:D5w+YOLj9Mmt^+e:~bm!|=5wHy');
define('AUTH_SALT',        'y*rc|+R>eKPe=v#o^y@A|d^f]d<6{W0Rbno@FZ3l)b<,:8k>2(CTthMh$i1-z},s');
define('SECURE_AUTH_SALT', '@^N~*uV{W3VmRtFNAmp};eXY-%LX:HV@F-7~t[v98!XGqVIxNS9[nW}~MC37ng^(');
define('LOGGED_IN_SALT',   '8bWL]e@.T*ox*7K,Ti.d]aZ<WLvv|pZ2H`@t]kAsOky.y&*U!t721~p#w4,~;!~h');
define('NONCE_SALT',       '@>U)l/tK;K,gvPa@l*Q(xB)/%-$U-$tH~z<c,Jz[FPe.Q;>/z~4Y8!z}Va)8PWFD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
