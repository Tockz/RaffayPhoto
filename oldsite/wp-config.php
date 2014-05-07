<?php
/** Enable W3 Total Cache **/
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'raffayphoto');

/** MySQL database username */
define('DB_USER', 'raffay');

/** MySQL database password */
define('DB_PASSWORD', 'w!nterw0nderl4nd');

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
define('AUTH_KEY',         'l;5A-aT,+dtl/UGUOasgFqD_7V~[Ivfs|C W%XI-D=SF=Q.415^E?`c_F_kX&1R.');
define('SECURE_AUTH_KEY',  '.] V_ik|=#2<2/_pbh!oF_mL)>QK-7-.OQAW=,yh3WYz(7eU|[u>g1B>(n;+j~{1');
define('LOGGED_IN_KEY',    '$9`zJJah/jDn-|{13`l|+u>/H],vF!<;-|S+*%higg*p6ykBE?qW_ut3U{:2]+4l');
define('NONCE_KEY',        'v+gLqT:-<ka)P,z0GH=v4[PF0y` dtZ<phG?8[r|^d2$S6J=gWN+N 144+|}G7-L');
define('AUTH_SALT',        'T?Z]]S}P4J2#?(>Tf$s_AcWBLQ&CE~ i_OFR;r=(5[;!s:V/BMz/v*%o/en(+-3,');
define('SECURE_AUTH_SALT', '%|n/R#XDWfox+zC1SsYQ$2gDb2|i3v[(6$-;sz%hSY,~0UG8#eF@I)/]/oipl*v5');
define('LOGGED_IN_SALT',   '0tT3;ExyJo/6NH~*{xeQ7K|@NvTL7r>,L7b#PN#A:_+$1BXvlD{ETy<K)$HUMwKv');
define('NONCE_SALT',       'R6h:h*>-^dvP|tI|U4J5uRE=?e #,Zq=-;P?aw/%/y^9yqKQ7,8sfF,WV(<eu4q1');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
