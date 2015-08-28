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
define('DB_NAME', 'ukrop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'uV$?K:BV&+dR?ZMJLmNkHV){#p(9@Q}$I)MZa!Hf1G@|TFRw2ZccPzhyK&Kk2FA`');
define('SECURE_AUTH_KEY',  '7|n3noGZWI-6mueYVuqq!IiBx%aWr6n.%H]dZq{Bmp=PK4nxad5YU6lH;U?_G6)i');
define('LOGGED_IN_KEY',    'RUuK33ew]BU4|5uWvY6:XuS1f^8cu[W4;=/PdDjUNCr[ZN5i4P+i]EoCviiW~-x@');
define('NONCE_KEY',        '!gb)H5.3nMS}rjI=P]8$ZtcvR--]?A6{o05c+|<=8YL#}pupwI# t&)de.a+<;{C');
define('AUTH_SALT',        '*~xoL|_,KUDwOj8s2M]p]-XF//Aggc.47vt1|b#sDC8Y4a,DTZq/x?fhSj8:v<v3');
define('SECURE_AUTH_SALT', '1sCL?8GylFH,PORnrN9D;J e27J>51ESs)~(kLSkx9,1^T?IKz -S*QXI!Adtl {');
define('LOGGED_IN_SALT',   '|pU>?SnL#byV+{lk%z&r#Art7THIYkgio$H7/Mt=j?K?~x0|tXt#hmS26t9O&=|n');
define('NONCE_SALT',       'vD:sIgj4fk~g-=}(4-]RMTiBty9h/Bm%]/wCO|g4bv_EVj8J15|il(GfiM>[(7k3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uk';

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
