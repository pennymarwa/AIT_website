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
define('DB_NAME', 'wisdom');

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
define('AUTH_KEY',         '-o*7/S<nGZGJEHd3eY(C<Y%lQyC>4] X?i%i Os71Jx6qh:lk2!M=-7)LQWL_+]C');
define('SECURE_AUTH_KEY',  'o^JrjOp$#7olH]wYfoslTVmj+G$~iY${eP!yG]5}iE8.`d8HpC5|(RmoNwv6[r&)');
define('LOGGED_IN_KEY',    'dn8ch4Aa(x5o}eg15CI5,P_.t*<eK+Xx`5{C%.oY6h8}knx=b%k1Iobf|RFSo|6&');
define('NONCE_KEY',        'cK.r_ApUq33K:Hy*m=iYuv)!VK>#p_X?$ogR7~fC!T+<xXH; CUZo==%*xx2?[}+');
define('AUTH_SALT',        'CXh%!2OC-s CMs1qoVtX])Rm3U=;|~-lyDLY4g48Wpa|>ypg#2_pAW-RGM:jr@C,');
define('SECURE_AUTH_SALT', '9DuW]GJF`ztM#G1KV?5g/Dz_])`yRbOv;Pjl~np;A-c@z}ss<_ick}+Lz_1-n+>d');
define('LOGGED_IN_SALT',   ')[bo4_L:l7i& |4< vN!aQe/5 &AAW0676@XirzAHB:k,|3 }+K|zR*Kd+kFwI[w');
define('NONCE_SALT',       'nKePl367YV|}WkY4e|cgL21$Ib$i]TvAI=^EjpcwP45;0;I1:r-0YD(}T:Q?eO..');

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
