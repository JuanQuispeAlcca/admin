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
define('DB_NAME', 'juanqasd_juanquispe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'u%aXQ-A4VKKJFojGm}}!@-[W6O@U@arq G6dt:/IL1=gy5Lmu9lcibT5ckr`^+Z&');
define('SECURE_AUTH_KEY',  'T*HQ#iZQ&b6p2e&n-x0&9f<Q<NRW!Bg({-&t24-jQ7F0;SgXd%A4vlqx8aqK+{BS');
define('LOGGED_IN_KEY',    '|89b0Q|`1|nvRyW!u,U@t%153?;ULB;x<h:kgol4CH c%H3xz+y&Q:te>*PY_P@Q');
define('NONCE_KEY',        '~^a[?L k81r*f|8^$Y- `)u&&3fB|oU]X h*Yt/`}}LdlWh*RT.`69m.HF8BTVgl');
define('AUTH_SALT',        'Uv}vz:&es>:j_ZXl<!$osn?8/amse&BTE?-hgZn,v{yoR$O(~;?++@2eF9|BKjb3');
define('SECURE_AUTH_SALT', 'kij=*f,Y 4t+]m;<!vJMp}vvDcdT~,Q3.|[Y|k%-MN hws 7R3 5Yt<!WaQ32,FK');
define('LOGGED_IN_SALT',   'KWG3rBnh(6L|6NLr=[q},GDUfWhT)p@e6<h@H+|$Gf-O(1Tvt~=kZ*-/BWL(O9?5');
define('NONCE_SALT',       ',X11(q:na,B]8:VIEyW/7gsG.1sBW!(+SX@CLYSGPiEX~B55*K|tyt|+aSJ<54w0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jq_';

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

