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
define('DB_NAME', 'handsandfeet');

/** MySQL database username */
define('DB_USER', 'malissa');

/** MySQL database password */
define('DB_PASSWORD', 'ariella28');

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
define('AUTH_KEY',         'JLEqFC6E>(xVNE-;}F<eZGmJlPe!Q/0tWJ-yt}mX=1t:Ty!)JsaJ|nG|pVG}6O}{');
define('SECURE_AUTH_KEY',  'B=wKDu~C0L|]Bs%ls6tl{W:Y{(#Dx#[&|542E gGPc}k,MeX5F~vpM2{)JxpE$sf');
define('LOGGED_IN_KEY',    '9]65}Mrmi M:j<h0H|#i>6FJ%Nq%LQHhaHWMYt?u;c6cJV%rY j-hcyW(vRCOC+2');
define('NONCE_KEY',        'c72p+=}{&llWQ&Se]B}_hY8 4h>n`(DB6,@T^BJUSGFM2M*9:Oz*Pd$k8::uv-Kf');
define('AUTH_SALT',        'n.!G-Y|e;_|{!1S%UZPsp1g.}V5s5gN.-M0s 0PKEVz.aJ_]Mvc};f^it-oQpZcu');
define('SECURE_AUTH_SALT', '.Jp{I?kpDD,~=60W%Q}(Z$6^A(l?($)myH@.UBm_paO2]P(8cuKhmLt{p/V g_]9');
define('LOGGED_IN_SALT',   'ZDt}4l6pM0?:WMxqIrL;E~ubE;9ok;H<kodcmc5u>ycfN`L<-FS}?isFR<P:l1~.');
define('NONCE_SALT',       ':E$3##xOP/ (nP2`@sJnw2UZr+votV{F{{/=z<yOjW`P8/<7xboh?]u@03f))wdo');

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
