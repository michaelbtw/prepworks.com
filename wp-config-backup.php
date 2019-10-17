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
define('AUTH_KEY',         'c*S6NS@AM01LzQmSEozeqe^m12zVZD@#&hSPHcVaMqT(OWfjB4bwQZ(V6W@F8xK&');
define('SECURE_AUTH_KEY',  'INIr3Y%g%sN!7%n%TP^Uee@Ri!m^nt9rAlChRnocPm8G6dxatYsg8RrX*1KdWv%h');
define('LOGGED_IN_KEY',    '81iHea34uM2lC1Ci9z@rDr@Sz8z#L87W#nldOGtv6aF5Fu)^yNGjnd6AyImlNC)6');
define('NONCE_KEY',        'zHkDqvDor#%k#7F4ZZQDHal9#HhLK1Z&kZB!)A3v6^LetVh%QbwCOl8dSpJzcthZ');
define('AUTH_SALT',        '^M#!SbI^td8JxErMG*II#CcRDC3Fo#k7j@BN4Q)@aZ7Cea!wQubm*xW3kIvA*@84');
define('SECURE_AUTH_SALT', 'rerooJaVX5LSfWHi(MiFy)xCBgoYibGxUqocqJWmQjSJh&Tr#Bxc5MCHPMeeEnln');
define('LOGGED_IN_SALT',   'HPxPFqctBMiu0ru&eA9ucitC&@2@aInfec9BzzPqHaUb7POnaZ4@OcJv(wqW5kBd');
define('NONCE_SALT',       'xNsRg!V#STS6xIYDXnK(Xf(rigP6GLHjVWMpNMx4^q)YX0L1s)jHtZZ&wq7&z@lL');
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
// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
