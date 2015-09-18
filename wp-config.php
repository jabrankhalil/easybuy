<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'easybuy');

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
define('AUTH_KEY',         '25m0ZD|v@v9(@qsaiR~H-%ar_,h=uaBPQe{AqPIeyxRkDu.n.,OBbLBL/Sgocs8b');
define('SECURE_AUTH_KEY',  '}{swZ&eTy,Jbc`o!ff[VqsM fCE[Swl0&CK;~I#oZ&ytmD|Syk GgRs&{P>s:p0M');
define('LOGGED_IN_KEY',    'noJE4B!Olo:Q#9O&6OjNZfcn{v?.d8MRZt?&~BVDfY&.*FF|CD) P)7Sxv[=*QU(');
define('NONCE_KEY',        'cozm|Y>] ~=`7YU?%IU]1%4l]c4]n2W8tS8r{K|AFOiAbRkKr>S~-A+V0FKWE21G');
define('AUTH_SALT',        'aMc_0oSK@MTvDaV8yWWWJZ{}S)MaFWt~l+2m,3;?.TsB:Z[Gj|!Ih3a68d 0:|#f');
define('SECURE_AUTH_SALT', '$@v.RiQmo1C 7AX/&MFlnCuX[Lgwb{G4M~[~!]zjAhQ3Er#<*|],tRBB)pV#UR|9');
define('LOGGED_IN_SALT',   'wCRe)$N}X9h],+?)|xGF*IE0m((?339edJMlHFFZ|JF~Ne!3BF4/}skT}.ek4#`=');
define('NONCE_SALT',       'Q!k*DEq}J}Eq8_:<8Lm{p$:a9%[X2ARw`+yCj_%0?FI*gU]]^r7cr>BhJZVHud=R');

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
