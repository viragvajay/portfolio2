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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
/* this line below is only in case if you are a MAC user!! */
/*This allows you to download plugins and themes on XAMPP on a MAC */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '36,;HR|byL-CN}-=Je(s5wMP0yNiP.SIvpg>#<K-8N rH@eq8!=V*+!_(;|qeES/');
define('SECURE_AUTH_KEY',  'GM?.RI4X;*FKc|Q`_sy~nBTzAA?:nfFg> mH!B-)NP#j 6aSv%w=U|gn=d5>W)^0');
define('LOGGED_IN_KEY',    ',OK1&7Vy5::-He7,GXZ]OQ$?bw>pY6Eth-k]vZo<<,i@Ufpm5:($tYz]YOV)GA-[');
define('NONCE_KEY',        'idaP|5X+.OE-q6yPQZkZ^$*kpma-_>)Wt@f7]&=62)B,tP-R~^XiCwVfi;Wx1pCW');
define('AUTH_SALT',        '$b#(t#4S[a7Fh4hHF(^v-pr+Dbr:|.m^l I5F3h~Qtx6OU-$E4`tNxXE:p4s#3n]');
define('SECURE_AUTH_SALT', 'e%5DRL*19H2iLca0XIqH`@9?]^E|5!E&%c8@P:m9?nPIcHE-[|D9QG9,1bK0!8eX');
define('LOGGED_IN_SALT',   'r}z@{JBXVa1vQk-jc3&7LS&mB:Mzk2;Any#pDo}>p|Z4bhd21B.:bA==~7at J|q');
define('NONCE_SALT',       '%|[K bkAD|l51BE(%^OZq$GxCQ{@0U1R[=_^m+t*5O]<9*sNeEG4TC-I/}#mAAzl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfolio2wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
