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
	define('DB_NAME', 'wordpress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
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
define('AUTH_KEY',         'R8t M^bv?xT/ +?24ls+>,]vEoMtj_/4uR54`Ehlzb[JCg/tMAtjTGu{eOi<gf_i');
define('SECURE_AUTH_KEY',  'Z+/oa4XXPnRM}3!<cvI~/$h|$I[-f[Fs+yI]psrVDCN~BG[qH`=_EUO]E!qQqK$/');
define('LOGGED_IN_KEY',    '{+H+7D*fW%OAfm+|k&SdS=Gs=F0)$`_NSt3!Wk+[g)V>z[&S)~EBp420}L<m[q?+');
define('NONCE_KEY',        '=U;LS~c+`QO74DIz4=u?L.WO?nzq$n>|8-Mm!A$3$E[@+)B$A,s&W]+^L=7gzQp<');
define('AUTH_SALT',        'aIT5?Oka<r+AaH`~1?+_H09xUt(+G;9WZY~&Me@RQmvuK+KX`3aj/,6r|ZoEx7(Z');
define('SECURE_AUTH_SALT', 'PzYx*`v|rSP+:^ykVvl*#yt}S6rz~J-Bq$hQ83R|%8vu{CL{-:(IoQal$fB8Lzio');
define('LOGGED_IN_SALT',   'Y$FJRg~&W;|H.[:s*|W$g&7v@*3RKAbj&sx%QF]5AU1a{+ikJ6(U`6>uns}d#:H$');
define('NONCE_SALT',       'x8TEBjvggCuLAmC=5HITR1W$hxLsdo8%}-8`Uy|QlCIg;L>Yl`|uF!;-|r69tS-k');

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
