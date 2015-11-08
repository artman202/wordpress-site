<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// define('WP_HOME','http://localhost/criative');
// define('WP_SITEURL','http://localhost/criative');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'etienne-wp');

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
define('AUTH_KEY',         ']KPX6|R=fzR|DrEJv@kA8s9ng!+B|T-,htr}8/-FU9j#`3&WE+R?9G$IDJcfCs0o');
define('SECURE_AUTH_KEY',  '+`v{qZviP5lOWv>[S`hcSdlj33S}:`Z@8ZVp[UE,3hemEqGpB{Q)FuJf&t7|a^G=');
define('LOGGED_IN_KEY',    'E#+ NxU9I:yo/srugUXMy]PMK+t?R^vb(5Rn4mB~~[g&%kP1,,Y}_|r^#:NUv7NU');
define('NONCE_KEY',        's(?~$S^fK>Z4aO:$7%I|vZ?>Y`~[FI+R#X[m!ywWr #O+hV#Cjsoi-n`TVh+_v$=');
define('AUTH_SALT',        '[m{^73:T%<,Oer[o2njPuwjQ77L05EVn=Y(;x2|1&!09`(ec!V$`r[#K.T2*VOqr');
define('SECURE_AUTH_SALT', 'd!LN@GKR |/]N*zLCcOzLHLQ-CsF:qfFa@YAz0V~J)+A4/*Z|6t)~r4OTK8s8i{g');
define('LOGGED_IN_SALT',   'aI~u8XB- -icf9h5A$b,n&Q/L!%a>V(G_UJim1j5ycT:j$?R4F7S3gskG|p0EO*Z');
define('NONCE_SALT',       'Bh16z<!So]TN!lED}6yM?|[*/h+f[^?2u(Odm-l->|SHLUc-T+sHvyr3!/:;GE40');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ew_';

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
