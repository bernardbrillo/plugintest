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
define('DB_NAME', 'plugintest');

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
define('AUTH_KEY',         ')1XjG^)3<O}QkWQV/n>LIl1J$6!`BiQvQcKpr:4`GTf<dagHgk;[mEH2=!VIp_p`');
define('SECURE_AUTH_KEY',  'zO+:3Gd>z}d4Zvj5DUfmPT[L,&k$#K3*oMv{Cte5?cyY~+_avAy8SS~ZR*SsSClu');
define('LOGGED_IN_KEY',    'M#%vCJ|9c1_]iBK+]vhEG]E$+8^u?gp[EN4PtKMPA2L|(tespm6K^i@{Z/elwtcz');
define('NONCE_KEY',        'MDTFZP$5DVQeM : lT&,%^7yr1w3*3n^XzcM#>%gzC`;-O[gSCydiK.=O7Kda+uC');
define('AUTH_SALT',        'I4Z*Vrmq|_%?6fuLphKJR5|Fda4N.b0r[_tEa*Xh9CnX@x(3yd:Pdsub6JPI*ARe');
define('SECURE_AUTH_SALT', '|0q)3Y[N8-y]exE?$;!R)UAM=|8.:A=[2*.7mP1>(@X9060Rjj<2/@?1(w!&v}JI');
define('LOGGED_IN_SALT',   '5&<JO3u_N|~}3RY&ll*QViSj,xgs9WEwt2FRl?<UQ59h[2R9%7g^Mr#*[)A$.$F~');
define('NONCE_SALT',       'gFeCU5](z{iJv<P-b.BD,v &&>@eUB*.&VBoq>${@:#w.w)r[1xBlQ#8Tvi~Y;@>');

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
