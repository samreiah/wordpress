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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'BP+b))m=0p.C3# oXwX@c2pDyGxW)PZo%#&{49aX^w_#*yuIK:jGI:7Bf(dWfRZ_');
define('SECURE_AUTH_KEY',  '/]c[Sts108[$Xte;xL&`^/8!pwR/C}F:C1z% %<35Is/TML/QJm+r!x~YS^o3zGW');
define('LOGGED_IN_KEY',    'NmG-8+f^Th$nS,rd`}^|;X:rc7&>~K=0=s]@Qk|(c*]7+6zhwscgB;oEW.H-e$#@');
define('NONCE_KEY',        ' ?E&$nbP  TJxLzVctB&y}5*$GG$%Ya_#<q[-I}Q6PGN4$s(?._4Rg,(3IHzr=9>');
define('AUTH_SALT',        's4$:3rc}]6**`JB|&|ZTut;jsfB)2A:ill9!5*w.h43LuS~kSuX:I-mT;&4jiAO&');
define('SECURE_AUTH_SALT', 'Ye .naplYv]-0CHZaJ*h  fqg#<-!wu2 b;95!T$ 5iOpueIXYl-iq|<c)UhkSRr');
define('LOGGED_IN_SALT',   '?f}Q!*_|PbF}Bz7SCxM<|)~W5Ht&9^i!%)es*UCuOOd3($4fD&;|q`rX0X`L%0r!');
define('NONCE_SALT',       'SCaH6~C!KkiPf<;cO)Z3)lP2K)X61M4.FYx8pPplEPfQq5~%B4Qe<NBXB2C?FZq%');

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
