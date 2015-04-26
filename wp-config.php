<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portafolio_cml_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.7wH:Y#nd@*+)+?PT$4^EFVzE-KI6opCh?|#*17ezzdh!%g-+dkI}@WqIgw;j(z7');
define('SECURE_AUTH_KEY',  'eo0|nIMr`&:{%5SD,3Xae|J$@;}~d{1sn3:<-$#FA~N3iLJo{PCY!h=yk.-8|^U4');
define('LOGGED_IN_KEY',    'fndLRkDNE1 =4-CjGiOlSoy`L})Mth#c$j]|ZfH[pz1Is}@-DDc%l[;T3Hj?8VwE');
define('NONCE_KEY',        'G/#>HyJTh1T9=7j} 4W3NR9YgZcfl}?O45*zn@:_zj/}6osaq`w%G4?3H|<7 jp}');
define('AUTH_SALT',        'M+raZUs=<:x#i*,+GZ&u9-^KSVt{C;Iv>7b+o~?A^e,B=f,,ie+qrIE]++%[`G48');
define('SECURE_AUTH_SALT', 'Y9W*UjM|(?B$I-f]srM1Ae`8BHNW|P=k0v%EE{0ci9$wqA;_r38mTZBL~.(9bUyy');
define('LOGGED_IN_SALT',   '$n4;i`g^(Z27m^BwOEB>UesSg%H?0?.Ikt^hY<|3Es_;C2F|Y<>%a>/j#D+R0{/^');
define('NONCE_SALT',       'DAr3ic8-i1,I*_{ FHjNJ*!BYpH933E|WKQ*n9>|hkgdE5M_3NaC1g;VljvKoYCa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
