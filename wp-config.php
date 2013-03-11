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
define('DB_NAME', 'seventi9_wor2');

/** MySQL database username */
define('DB_USER', 'seventi9_wor2');

/** MySQL database password */
define('DB_PASSWORD', '3t6ZU2FTqi5r');

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
define('AUTH_KEY',         'GV-Ujc_f|u5|Py^bsyA+]%-zkvmlR=0zp.;l$66;sRS=-[)|#}_;mEs.]1Gz%Y]@');
define('SECURE_AUTH_KEY',  'oWL^5%;{@uVq7eymrjrr6M6 #Q4z+=/_5fd-]!q(w}gFv-_]waB4]}fvf?@H, *D');
define('LOGGED_IN_KEY',    '`40hrigqRwcXxtB!`{O(ZSO:$[h>V-(h@KTFGEm-[&0BN)$)!b+NX.Jumk)ns3lb');
define('NONCE_KEY',        'w/aLWCnm*bTOq@jM4k3P-$:?K]YyQ9`m}E`i5J[1}yVrgW8l#Wb=R_AaJ(r^}1_`');
define('AUTH_SALT',        'Ug$_5K6P=Tv~T,a$}4Yf:fp8UErwwQT;1zL:6l:9hS0Y#Wq&B/s@*iZ+9%Jp!Ktj');
define('SECURE_AUTH_SALT', 'LU(eW(->KM9fl^?VkAfTIR5li|U9T,z[0 aV|<H/L_2xKVcA6BpwotoG2|m-k]19');
define('LOGGED_IN_SALT',   'z-8e~ED%C[yg>|Of|iqAvq/f(p{JP91/Df4R=rT[57EeP~mt2)p_YA=p{x_jc,!_');
define('NONCE_SALT',       '<27j- *Nd<6~d#;-gHtd=#:%M<?n<IiQ{]+j+TkY@8?D,P[vKL)IOjFvEFPqOSr@');

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
