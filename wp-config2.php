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
define('DB_NAME', 'newmypre_jamesross');

/** MySQL database username */
define('DB_USER', 'newmypre_mypredb');

/** MySQL database password */
define('DB_PASSWORD', 'Ri1v}~g^*HTD');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'Ef3G~j},O2MBo.jW*3TfybFRB^wUXFO:g-EQj-}8&-Kr`6rFr7LZ%+I_rC|PEf;c');
define('SECURE_AUTH_KEY',  'e-y_w9d]Unkbm)g7G;a$`&;TosT}CyIajlCGqA46EcOYm.(9l4CwNy-q8.Y.sJ-g');
define('LOGGED_IN_KEY',    'S^Y|A%(Bq&0tc~tnswkVJy1T=w#P/`c&KRF v:b^5|IoT7)?^.^AD]u3z*lxMQ<_');
define('NONCE_KEY',        'B%q 2yAr$U|C+U~p9ZkNLsKvD~tkVy9-G9m,{6OGxbU.od}PF#?%&M(SmyB)*fxc');
define('AUTH_SALT',        ':T}D? baB+b+&e[BtA?qt*pkY)x=9z0{2]+c6$CR/Z7^-^5|&,=Cn@w{B<pvHpB4');
define('SECURE_AUTH_SALT', 'NO$hbp@9$TgGWN)OwgZmlihr]TkLu[^oyF2rzq<|*W8v_+B]%w:C/%0*oA(u)r}R');
define('LOGGED_IN_SALT',   'h{+_>DkUw;B(BqekAN),uq/~ZO)p(vhx(xzC[J{t05MBL2~-]+9:MUe8w0-#c~ap');
define('NONCE_SALT',       '}vn/f4Qbs*HEZk8lV/p98LlwU2=x2cy7D%%}.[s|.([tzjR vPLK2pJXyTz2;a^2');

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
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '512M');

define('WP_HOME','https://prepworks.com');
define('WP_SITEURL','https://prepworks.com');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
