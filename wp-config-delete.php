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
define('DB_NAME', 'newmypre_mypredb');

/** MySQL database username */
define('DB_USER', 'pr34icjs_pw34km');

/** MySQL database password */
define('DB_PASSWORD', 'UPMZEX0xI(BAob*2TV');

/** MySQL hostname */
define('DB_HOST', 'wp-aurora-1.csb5e8ee9gcq.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'Rv-jTrt 1W_fd7Z=<9`V5`[Pf=OgOV[xh Ya_,dMisMgI)H&T-sg*/&i&T(/5*0;');
define('SECURE_AUTH_KEY',  '>0;fu%Q!]i&L.9bZo$.%hWbsRQ9@XIAGb$8|s9r@qI|[RJ!sq#J+V{ZZRcm5>U:v');
define('LOGGED_IN_KEY',    '|eo,9!CjTb[E4Q`b.Vr@m=r [P~>;td!YL]1ovfKUFpJ+g1G_p,x{J5su?h(u3ir');
define('NONCE_KEY',        '9lJbJ*YR^Qy NK>0,xGgc{.eabXxycRXvi!`dmQ~}aMW ni-K?Hl)@,na,y&qC8!');
define('AUTH_SALT',        '1QVy>Vt{j+?0{2g7Hup<PxQZLBOub:~!dgM`M)PK,p5]<l?Do:HuRjba(K3uMQe;');
define('SECURE_AUTH_SALT', 'g4TCH(@rGSX}Q%6Vd^mYDq TmM%wI{OS.xi1[j.ZiwfqfB[:lu|Rx$~,D%=c)qm!');
define('LOGGED_IN_SALT',   'vppzqcki}7zyoF%,Se9ACwgY^Q><x*(T;=NhG3UR R77mTch+Q4~IIZ`f]sXCp:7');
define('NONCE_SALT',       'MYO+lTVvGjgKzg6L}}iSC9]>nig33SQ4pv?Qz/J%VN`Q,40>9(*T)&~K2(wA9&#D');

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

