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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-k,,4YbF9pQ+,uCC})Az[g *pn9sA_}gW}q20+zv|610CO|pI:&umO3?%2i}Uv/9');
define('SECURE_AUTH_KEY',  '%^dRID6:z:1p?iIi{D+8ky/N4YIeaoF}i+~Jaz5z|3j=Ly@7FS&_HkS#i&ZXh:Ln');
define('LOGGED_IN_KEY',    'Efu-KX 0m%M:-)?}b-*Chsc31Qbw)eV]MC0hv0i|d_Go]kO^1ut0a Y gz)|J|al');
define('NONCE_KEY',        'O!XYR.b+-!mJ3acqV&S2s%3XAeR;Q9-{[u>-o7$}Y^lp*tA2oT+|0K1MF);p:IPz');
define('AUTH_SALT',        'SD]&t}=7{s) 7kMh{D75v+u$k S#IE)G`!i6;`-j|6~$2K>R<3J@#+0#R%}a.$bp');
define('SECURE_AUTH_SALT', 'G_s(#K%|H-bh.?M^L^o49M6GjbU?fu-DeqG)C~!U.`p~l%#:g9/1j1N^wLKd9Bq/');
define('LOGGED_IN_SALT',   'yZmGDB?L+QcHxpk| +d]4w>-1S-JXG<|>=EB!* HhU[xELxSi+U%Y_RXIjS*CwHT');
define('NONCE_SALT',       'QB-U!i*:%,Y[)iw&!Cos&)eIVZ=Fl@Ng%bT^:Dk4C1cb%Uhx:^^l{DY^hjkbDMJY');

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
