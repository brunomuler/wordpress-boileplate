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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wp');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'admin');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';PdvPN$ny}P,prZY|=TpSEF4X}&),;0Ks|QQj4QY^3S$>r+!Yw}@=Vc9K;e=sWNo');
define('SECURE_AUTH_KEY',  'vMzvtExz8<8WB<1UYP=5y-+#[Zt.`;H|7$Gik||M~32FIPGN/4&{r_MAt$fwm-45');
define('LOGGED_IN_KEY',    '|%5*w@ZL8G.%/Nw2-NRd$g8I Pm<KsmF+$wlF@(wNSjW5]M+>c4c>R61=,+r>+-*');
define('NONCE_KEY',        'c~SXcHG)`q~=`)_46E(I5BVh,~{;l?x_e)~|$.4UD(n8gU)dCiq|t-Ze-WAS.HE`');
define('AUTH_SALT',        '_Z*3>YpL(o6U3s*H3$bvu)?,H;+/33>BkKj E88c+SXb W[ UVX3?wIv-S-6`)hw');
define('SECURE_AUTH_SALT', '|<xp|?9M=V%KK0g`Tjhdjbt_(~}R -Y 40_87$+oz]|&zD]Kw2T{X0,{m;>*$?WD');
define('LOGGED_IN_SALT',   '+P{N27}%8&fszo1[gb#+9M[--;8YE`:So./|2[D@,n#U+PRbf`=x|-p}75Y;Vs n');
define('NONCE_SALT',       'R6V#E5j(HWK.$LaYCVJN1bC<rJ`}c%P9QTBQwERqAQOx-RO!upV.>c=lggH8[v%|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
