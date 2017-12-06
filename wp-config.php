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
define('DB_NAME', 'mazesekhaa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'ac3r');

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
define('AUTH_KEY',         ',>CK,1s%3.]OT@2M9/PlxYT?2>R3OZE-5o?CtY_ZN<`MoQ-t+XE~Lkz*I*q/K-=>');
define('SECURE_AUTH_KEY',  '^#!U}*gk?nD8l,yB5<#c|K]/NYUR+*j>CeW5w%&3SV.;;t(5V$/?g7#!;$.y(1GA');
define('LOGGED_IN_KEY',    'baQh7*=rTOM8_W&$fJzn=/TV[VZLRm$w8.o<): :9hlk8/AXwFN+WJOchjPGWhof');
define('NONCE_KEY',        '}F,{#fJWR:(W*@!N;8`fzLs,9wfl8)C9K.Gst}|*rjZ3Yto@YdIE t[k!_|Ao%.J');
define('AUTH_SALT',        'z;oo^zhQyY&fNNihKP52{!_i@//=BUTfmUwc?cm]K:x%%JQ~7veAHX]e+>40(~6x');
define('SECURE_AUTH_SALT', 'y]0EbU)B3D8WZ=J.aM7V,;CsGBQ%s=*:<?T0zGK}(;56JmkoH1CzQ4ejAD50m?X(');
define('LOGGED_IN_SALT',   'p:S[3I753-Xdl+{x3G_]%aqmDep{06Mh7~zr2wL0pmkIutqZqSS_v-MLkl/%gM;z');
define('NONCE_SALT',       ':vNE.WdD:${rurZB|$h[C+U0{.0@ AXgh[$T<S-4D>8$OCkIZ0x14;Y[76%(@hh)');

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
