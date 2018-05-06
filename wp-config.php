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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         '[nUrIa|XJ( oSv?kB|&9 wS-&|<@}[4e>EgEFa07NLYiO*?%VS6U:I4D3{Qcp:n:');
define('SECURE_AUTH_KEY',  '0ysS!/Lv>`oiWy%9z_8cJBI#vRj,+4+ki]]!BcNYVw_A?X_*7|w{?SUn+aii+&rr');
define('LOGGED_IN_KEY',    '>:,Ga)K$p0knEUl5)v6D8NN|+z,kj9i8sjqFWevewCJi^QFK05ufs_}-.Q:mjgPP');
define('NONCE_KEY',        '?tu!{kmqB30~i`2P>qWZj>9c@_WO|H}GV=}d<^^{}yOQs1C!IiW1.#0S{Q*:2KGG');
define('AUTH_SALT',        'Gg*@EzZkQ12R>y>_FEhIW6WgbK8k}-F5h9KhAY]!7Xi>nDU1fR<7YjmTabwC;v7D');
define('SECURE_AUTH_SALT', '>?uoSIJDO;hD6PT9#.Bv72qA*28S:r54$(7hUt233e4Rke-@0t!dSVB*u~-M5Vm>');
define('LOGGED_IN_SALT',   '?w./m+%|TM/xPd2s,Cj03q!O#>9#y8[cl,Zsjb7Oznf/NG+kp-scm[t!tx,v$Cq[');
define('NONCE_SALT',       'iipFO1.DQz7y#~2b>[6i|yGtsxzez5]mfaCTPVLuF!O1Nb`vL,F6(JE2IOUQA&*I');

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
