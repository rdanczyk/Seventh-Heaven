<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'seventi9_wor1');

/** MySQL database username */
define('DB_USER', 'seventi9_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'iJ3D9qGz4s7B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-f`cHf7$_LTMfd4BaAMYQr,5(-^ZV_-8)Rlq<vLCbr(:Aw:+Xgx2IE*D;?Y*a!ov');
define('SECURE_AUTH_KEY',  'woC-E*V3aB~rsQCU!D2o5nb;JW)i0X?Rka@fZoGZi]F-(u#+f[ ifMhAD:3PcDI&');
define('LOGGED_IN_KEY',    '3[6-p$|VGM1)xvB5/rv,t++2Xi50=bO|%i)0K~@&s=-]DG;rix4JkSMmU&YfNGhK');
define('NONCE_KEY',        'Ee5aJc_)DsNgyitm@dSiBXG9m+>UuG`|y~v%.hE|LO;NXpAp_54U#IwK#Erxpko3');
define('AUTH_SALT',        '2G O!oa:~-;#@SL*$i7zo@tviX+OWA`P/mXr36+V;Hc+ky^ii[:U|8GrFX.mZ*%*');
define('SECURE_AUTH_SALT', 'e]5:)ElfPu4CfY`Fz:M*$&%o_84)w|mtJ=^A{]O>qNGM*NDdj8n4u*c*&WmAT130');
define('LOGGED_IN_SALT',   '0sUzLTcG2?&@p+0| >&N~+%6ch?]N1dy9neW5Vyqe+5|aE!@?hK34@VW<xR5K +@');
define('NONCE_SALT',       'r.vIayjn4R6Z}HVn2x}}5E}%-0z)DEb_=PS6-^S$A_.!mn,%=rR>S%_;&IXr;K(j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
