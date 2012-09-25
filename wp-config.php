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
define('DB_NAME', 'pqOUCAdvuDOdLeAvmibw');

/** MySQL database username */
define('DB_USER', getenv('HTTP_BAE_ENV_AK'));

/** MySQL database password */
define('DB_PASSWORD', getenv('HTTP_BAE_ENV_SK'));

/** MySQL hostname */
define('DB_HOST', getenv('HTTP_BAE_ENV_ADDR_SQL_IP') . ":" . getenv('HTTP_BAE_ENV_ADDR_SQL_PORT'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** BCMS queue Name */
define('BCMS_QUEUE', '57d1020b614507ff8d2912bdc64df1df');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6zR/yWwz-_?Ssbd]c@{[8Rm[]u-&~>+3~k dqZA/;Z][ 9?Xqo<VZgZkp5+]nI.K');
define('SECURE_AUTH_KEY',  '_./=<KY;ib/Rl4ElcKqVuVz[=zMep!lI{0<_`s)wKcG|nO6N&h0R?WLOz;TDi7c*');
define('LOGGED_IN_KEY',    'ELdtKs-VBwmavGs!J`5Jr|:R2ef-jkK8Ypln)S}!5P1@QM&+l=,+oH)#BY!&v Ua');
define('NONCE_KEY',        ')Q&kE|y<xS+ a+kLC[>TtsBQ&jyAfp,:0R0Q0h)E{)7@.WD+F9i-jytQs|XPjcLD');
define('AUTH_SALT',        'Dx9Oce(~q1 -=m$Nd4N30zw?faUcLcP[*/FMdU h=NzGWH|2=g}BTa)lRyMQSAEk');
define('SECURE_AUTH_SALT', 'D J|-W+Zc2k rqo@by4%$FVS3D_aFCri1%07`<+KQ z^*{nR{@.=Q=3n+X_/p3G ');
define('LOGGED_IN_SALT',   ')my&JXe|y-H@;B2A+)).zrncK7.!~pDbY^LdjWeWc+_n6t~4gB4M?`&$2h*1uOC~');
define('NONCE_SALT',       ';;91T[6N^W~6O^SFC-bvVXBEI2pZ]&_y@03d>`5#I50Wdrwe4.r-Josyf*T_hEXG');

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
define('WPLANG', 'zh_CN');

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
