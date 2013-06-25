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
define('DB_NAME', 'juanquispe');

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
define('AUTH_KEY',         '[[]%{HI@=Gdzb~eDI+w_Q0K=xiqmLyg3|+*UL|-l&@~tNd+5(x(mr.>|1&/#lu4u');
define('SECURE_AUTH_KEY',  'mGG4J]yAh-]/{T-|:>Oh5_txTJDAhR |.)*,Ky,Evd2vh5wBtlMv((q|8#e-z2_P');
define('LOGGED_IN_KEY',    '?-[(Gq&C-H{ZSx&7+!%A`kA5zCZ3>/$eKFU%|_lQ?hWM$d6e@gkqPcbzLaZ[t|cG');
define('NONCE_KEY',        '6?z$Ily{Qw!bB h+nR!HCqPqWUYF674):G]9|U?RkE4Q/{aph~qx.RzV *?kW hN');
define('AUTH_SALT',        'aNvt0W*#X|~Ah0u8C;T`1V%6wuTQy<`5;#a6t$aIDq58,=X(y<ArQ>G|_54&R~s(');
define('SECURE_AUTH_SALT', 'sbmA2o%*X!* +Eu$rWq]:XUemOE-8 -uY5-/DY$rY2a1dzH0)XUiYr|)/[B]@`|u');
define('LOGGED_IN_SALT',   '8-ugGy(D-]j2jYHL7$Y[u&4nN1Zxm}NpPmk}vOB{5.C@:pAfV[|vR7F~;%KaSt|3');
define('NONCE_SALT',       ' Yzv98rCk|Ne&yRcm-@Z#SK}tU|zsNdL6`$RUPJF82n&t^K`-J5F&Mwg[S{/+=P:');

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

