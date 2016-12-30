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
/** test satu dua tiga */
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
define('AUTH_KEY',         'gdJ%ALZ3Q]+95Vc$](Wx XXRz%E]9r*T6 a#XNClBh3k`Isf97]VR|;F~eP`K)/>');
define('SECURE_AUTH_KEY',  'P(KZLVkV{W:&lUx/7W1)^uAHun0I<){!Uiy]N*x.UNi518}h`O8@p89K2V!2sG85');
define('LOGGED_IN_KEY',    'tS2},*>)[<]NYF?3ZT4)?z%3ZfROWP(d-X;?)@hm%3U]8:<ho=Kw:Y<QVMrusQnZ');
define('NONCE_KEY',        'HBUo|I#]l( -CN2y7f<{R;jc.4m;yNc%6VRcHmnemnjFFs~E_&lmJ!QA.Q-j!T8l');
define('AUTH_SALT',        '=ib78*:)PI>>([x4<w1Ll![Ey*l}UyLX%WjvXC*f??&*kh~ZtRf{cn$4qdVwL>Y4');
define('SECURE_AUTH_SALT', 'vZRI&~HM!]kTgtJ,Z4_>,FWIv;L4]aqsV1@)@u8@^K*L7tY(i#6r@,Xq+t^HAxtC');
define('LOGGED_IN_SALT',   'P9{/0m&tY3?JjKbG-?e &s3Q0u/Y%m#[)/^OyohFHM,+kY<h+k.p8+^Z!qem]]xJ');
define('NONCE_SALT',       '_yp6VQ#/9DTHEpKz^5(l{N^abgvwYG#U,U$V3&(/BvqynH?nvYP=UoDW}|!Jvnt$');

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
