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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         'I_.`hW[De;tY$eh+SQeZ[xbpttd-qI8P=Z+0GrhkNyz;-,^IF.xDy^42w)cCQJ!Y');
define('SECURE_AUTH_KEY',  'VV6`$as!7)C*iK;1XRvID]-&bM+^=?SAwX=S.S_>`?*<:7-bXtA%WdK!yuniM@R$');
define('LOGGED_IN_KEY',    '5%(ZhE}jfqpl@|=kNyLb{tX#Lpzaj1*iU)H8;!;sL~0Vg07]QrI5bMVJ2?<t`5x&');
define('NONCE_KEY',        '=,MaMX@PU{A&c$nJfgFGqa!&RnOGEo}b3W)~9:mtguB=1.<MgGq~c_mok)X@~Jv%');
define('AUTH_SALT',        'tjUxZQ1c?1<X4R3nxX_Ez*-6?YSX`|}Z/ARgLY>Z^. 06Op Ja@f#xNW9$49<Rsk');
define('SECURE_AUTH_SALT', '~EdNQfv:d;oC+u3Caom*hozc@hm2 +/SVDf.eG+`gX5ahN5=-E;mY$g-Z<$,oq33');
define('LOGGED_IN_SALT',   '5Zo#[t;wwT=_b2!mxp%0K3XL`V1h&f@]t{QH!SQ I5w,W*Ib>ir6Wy$_+JVnN0`2');
define('NONCE_SALT',       'zD2Aop&_toA]$XD;*RY.>5sQI3(`:,9{I+^.F5q-Fv 2~rtnN1OC0zhT#Q!yRNMU');

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
