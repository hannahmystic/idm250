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
define('DB_NAME', 'local_idm250');

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
define('AUTH_KEY',         'qIlKuf/I2W#N/j;e#1N=#:M(R@{AgD!z^Y/!k8~50owQ!A4xxMMykN+`leWT]}I*');
define('SECURE_AUTH_KEY',  'UIYy7:3XV7i~8eoq)u+x+<t671r0#23WlKyvB)=y6@F`DadJXO%aH/R>Iv&O?Lsh');
define('LOGGED_IN_KEY',    'uc*im9{&l|$Z:emw2>cGb4W{`-Wn`0RL&yE&} 30MKLpFqPZCWtI:cKe2e$)B/8d');
define('NONCE_KEY',        'XyoN>aYjr%UL6)hYAgWu+Yov&rF$&8=Q4*:)pRVCj3<X</iQz!9o#ERi&M}4mYIj');
define('AUTH_SALT',        'J4gHCX_Mvu5r&MT/Qy</fosL*no6Y`Udg*@,p-!1[I6JuszPwFx <g$=.E,Hp!_@');
define('SECURE_AUTH_SALT', 'Lx_P/H?8Lm1MCNup6$Re24xJnNl]4!|E-Y(<7Xu%-jp@IC/Aq~^>FM`=TLA{TVzH');
define('LOGGED_IN_SALT',   '=/Diws)YP;GN8aqOPiD>_?X/yYd@7)`*uNmWOw|[(=^%Y&6_B<CTTd.p0fm%VFg-');
define('NONCE_SALT',       '~K}pH4<nu,Y`TSX`M kN4[(iexhhEEj5U38(xauEXw?1f|nM/`<(ua[.ST+#>5k=');

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
