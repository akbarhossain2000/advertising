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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'u8IRiwN(&6!k9,Kp=ST8${ni|mDYD~uQ|:XBCsq66}9Wqt#OX{1yaIg!2T`q{N7(');
define('SECURE_AUTH_KEY',  'n?+=:Ww[1zj0;H%1`CcEU2Bg@rQm[vmG2W{&}VP~*C|B>EY{f9%1n(AqeOkm%$Sq');
define('LOGGED_IN_KEY',    'Q2FU8aNcn^VqX3DivDF`Fmptm[GK?]<0YELr>$/n}Me_OjED`HrYsQ-B>rXmgXF ');
define('NONCE_KEY',        '7?wPCBOYnT~/#y%L?.J9UC&.mtRL72qFgTCV[DT?sy2#9k,b{zNx.U4!zfRm/(:c');
define('AUTH_SALT',        ']?w)jdO<*j,&-w=p~TSDxb8mN|aLg=.P#Q?tWW}UEnf}bNQcV(#APfd`YrP!yn(Y');
define('SECURE_AUTH_SALT', 'Mb[ZAO`7%4GK(pN^(iWeg4?iP~EVhG]~K~:p5>XBz[j@78yGb`X|^Cwz?5p)2)mZ');
define('LOGGED_IN_SALT',   'jUS:=3~iEe:%h4!,U0@i4O{L_u#i]LYz>>MK`bs9d)|wz>I70SkI(K<ShkyCVu<z');
define('NONCE_SALT',       '}96U8@VnYS&5A0lQX7;9YDb^rIQl7I AmNork&~1uut: 3hd[.5)v([Jwa@O>4[k');

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
