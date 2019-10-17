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
define('DB_HOST','fd-dev-prepworks-cluster.cluster-csb5e8ee9gcq.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'TDr6f14g3MQ=|EUOg5KKI<r+xuH}IAgF5&:KF!`gn9x87tCF6>xM7bXhLA5DYHKQ');
define('SECURE_AUTH_KEY',  '+9G~^n9urUhLkcFF9 UE(=QcJ%zj50}Ofx>,y(:9q`m)VS]//>/&CLV4IS<sDbn_');
define('LOGGED_IN_KEY',    '-%>t4|AMZY-<S+-Bl.v7#$,^rO{S|Fzmw fK%IIC/3)s1YrBKJHgV++_s_uX_tO{');
define('NONCE_KEY',        '[;+IKgO|@cLv)C3Jr*y}NvI%0ynJk~i7 Udhh_h,oWc?!WRoE{$8X_4Y?JMfRr)3');
define('AUTH_SALT',        'U7T1pDL2J)ke_q#(A*Z8Y/(lPt}*:tSA,GH0BR-k`95U=_#D--8@Ujv!H_t)2kx9');
define('SECURE_AUTH_SALT', 'saK~8:l(t1.AC#335Hg*UB8qvOJ1T@+&n+X%:U!lWWcJc#$.)9T@JtLW!*!yK6jd');
define('LOGGED_IN_SALT',   'eTOq3j?Y>[qX|CW8mWuZ52L)!3_g`&WB<IMe^d_vt!rk9VK4<xB.<cF@k]b<V,QZ');
define('NONCE_SALT',       '!rMN)MWMeS8*nPzXLK0BnEMluI_g~Uhx9vO Ce$A(ji:Z^S?+B`_vKH?rT}!>$XH');

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
define('WP_DEBUG', true);

/** MS added to debug memory leak */
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);
define('SCRIPT_DEBUG', true);

/** set https for admin
define('FORCE_SSL_ADMIN', true);
**/
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** mp added to check https **/
 if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
        $_SERVER['HTTPS'] = 'on';
    }

/** uploads on shared efs **/
/** define( 'UPLOADS', 'efs/uploads' ); **/
define( 'UPLOADS', 'efs/' );

/** wp-content on shared efs to make theme updates easier */
/** define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/efs/wp-content' ); */

define('WP_HOME','http://dev.prepworks.com');
define('WP_SITEURL','http://dev.prepworks.com');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define ( 'FS_METHOD', 'direct');
/** updated for greedy Geo plug-in - removed by MS 8/28/18 because set to 1280M by PHP **/
/** define('WP_MEMORY_LIMIT', '2048M'); */
