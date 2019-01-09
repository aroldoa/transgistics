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
define('DB_NAME', 'transgistics');

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
define('AUTH_KEY',         'Tqt@{o>?dJEq?.><B8()8ut#0IOFr{-ydhri~P$e~G4Y$3v[5g7uGo;lz.v{w!je');
define('SECURE_AUTH_KEY',  'O/{EETg66L;!k[gJ5[$3pGM--12pRu)0Ah->}J{R RYmx&OF*0]twd&zBF`:$TCC');
define('LOGGED_IN_KEY',    '?}%reba2@W/,4d sCfg&SjFgTE>FhAsW)Wjq~SlZn2Nl5dD+bN <<>WD:se_[|4P');
define('NONCE_KEY',        'SBb`HF,lAU{uKe8nAvA#Le?azrz*(dd>A.>f6&:xz8?Dj{dCGd5zRxeIM/;t_ED0');
define('AUTH_SALT',        'YIdfhoDR7@RK~ad]|vqTxcRIV7|GbzOwMQ|/@j^@>g*-7sC9uS3|NE?_A@9DvryD');
define('SECURE_AUTH_SALT', 'o#ovK,;dd;Dp|J}B*b`1O(>Sq|-/9{TsEszR?3(PH)w|dsyY}vi__GvvuaEcQd*v');
define('LOGGED_IN_SALT',   '2=.@R1%m9V(!#Qkw4c=SZ4/7.4cj+|UCfTJz)Ex,[8zwN4<L,zF^.)ST@kBM@8v{');
define('NONCE_SALT',       'h)i]:z4|[x}=buZ!bH,ZbY%uctdu7?;:a|J__w6<~Nm$|_20K@NMLORb4?R#;Umu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tg_';

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
