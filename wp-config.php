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
define('DB_NAME', 'musl_app');

/** MySQL database username */
define('DB_USER', 'musl_admin');

/** MySQL database password */
define('DB_PASSWORD', '$KZpLAl1IQoA');

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
define('AUTH_KEY',         ']{>L- <.-*::wQk9pu8oO4c/g<R)Bf`N6]/c+<6P+2c|.:%V/Yd JSeE#AY;u]cZ');
define('SECURE_AUTH_KEY',  'wv&e{hl_8dn/>bi6lBC1v0u!KL>VgxTP+h`3m|9Dk.Enyj.uG(B:>rb+)^-WEpQq');
define('LOGGED_IN_KEY',    '?u`=}Bl}]TrhL-,Y8fe6qli!K!V5,DV+h-=ha9QL?C=J>-0;E8(l5`*=J.-eatnB');
define('NONCE_KEY',        ';H:&6D5,%$d5`y.Z`-CEKf3V0l?|z#Qx)WuQ4b A(b_^ceJ|lw(arx;w2o:wEoGW');
define('AUTH_SALT',        'c}hG;04&3w| *(]bFezCt8CaWz(62Rt^%FN}Ey~}_)|qN&=CAD5zrjC7dg@cvKnX');
define('SECURE_AUTH_SALT', 'ad/<ttcIJ$vVWceyJO$6,jf.7ICTTe9|8nd]19f{:<V|<MFE+S3+wdb@ /uq 1)?');
define('LOGGED_IN_SALT',   '@@qOtW*0(EqeLvKAnTT%bAN^IH+thx@y0`&G%R)AN!o|f3K0_6$A$po@!2h+hw]]');
define('NONCE_SALT',       '{aH:m1-VUWQqIbuZimT+Tqq1X68H+uO{o2F/C`-oV<_s`7UZA|ic-4pRU8o^kmU(');

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
