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
define( 'FS_METHOD', 'direct' );
define('DB_NAME', 'music');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'o*}F.,jYpNCyRGw:[LR;rd NHvH`$5E[tCTq?mAI$h.`QRnc#j.i$`7V9xd_D4Lp');
define('SECURE_AUTH_KEY',  'gRm,lC-z`$)n`T7oGBv%2oO@ EhC`ew-]qUk6Vx,<71%yY@iAj11vUm|NWCte!X)');
define('LOGGED_IN_KEY',    '&:{N0_@g+HRhoNA!P.2ai]f`26O=UMh({)y)uL~-3XN &P~ZXdibOAK7MyB=5u p');
define('NONCE_KEY',        'k5>!Y/QKMkA?tP5sdYDj*3ewZSEIO[{`jtm}*fB0K6|AaL|o+zAVD8)2sg>zJO79');
define('AUTH_SALT',        'Cf-C-j3cn+(2]j)2[3kqyJjy3TKj+i*9|8bQb8NpmVoS@m_I^- 6,5Xu%[Qcc90w');
define('SECURE_AUTH_SALT', '*HM-ibF;t89-v)v<uUwU6{4`<1+AhV4hJ]+!y{ry`s?0 yz-BGc_{fOd3K3@LUgd');
define('LOGGED_IN_SALT',   '}D 2.z>FC362SUFZh.O~!eVxBS+4Oa0;@s.Qy;(p;)okdzX~gpB9%l0i&P7+>8WK');
define('NONCE_SALT',       'yQ1tS[;%0;s?FG=lu)Hz7_k_hdjfXj2We6}AXoy`{p)1fsb:oFl/&Sn.e9c3cao*');

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
