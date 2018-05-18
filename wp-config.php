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
define('DB_NAME', 'wordpress_en');

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
define('AUTH_KEY',         'Xv0y]NT%_/m0bez=>e+m2M6kf3z~Ts(O+w7+bR#p5YYq`,1j=%^1h5#p4Rpry.iB');
define('SECURE_AUTH_KEY',  'OL9wA~A8dsV|!#=jL`@Fk3_--ob0tS:o.S3ny+[d-Z?&@,VcZoB,D5=rdt?i`-5$');
define('LOGGED_IN_KEY',    'w(X.]1Lg7W#P@4o#tUChjgafC2P@v6&s&nh76>ZrHjm:eQsaH:zrHg3cy`auB-P}');
define('NONCE_KEY',        'P]VB%VhsFlS.xCmM#=zv%Z*NKQY)eby*b|s bP%u.d/X3FAp6xQ1v8|$xEi$vG?c');
define('AUTH_SALT',        'skRMWThCR?vHxuRG0[l/K[(AdXFn^,|jWPP;;].Y~X5.>utZXpL|[qbK82+Y!#Wh');
define('SECURE_AUTH_SALT', 'g9J<I%H:CQ:{Qi}u%9!g6lgIBZ|kGJ-<^!eW$B{qJr&>s}Ph4^MXC:ue^D:[gr4I');
define('LOGGED_IN_SALT',   ']Y-Dyhs$d1i4]%Lk:.MJvN,x@LqDF.>CukUhoT<5+Y|RiQ#@K$ub[pkK>=?UW(j_');
define('NONCE_SALT',       'K<)1S`K3_uW#Y5on+2I*XM39Tx5zIwMN%;Mm+u.:?E`zdbREhpL`yW8sJ:/J2 Go');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_en_';

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
