<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '4rthAssignment' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7%pf[#)oU+,VBaU0cf8:A_#d-~e/oR(JWj,_uD{scU9z|7}_*tSDvRsLp6lo{ROT' );
define( 'SECURE_AUTH_KEY',  'xM??CtV>%.~f1BC99ho>0[LgO_|@ZADpW?;+%]o=Cpmy+cwEV*=)kT[6a[yZvG,A' );
define( 'LOGGED_IN_KEY',    'zu;nHz5Du,(=GZd4k_Nsq4S-*DqCYu $+z&x;pmQOh6lFa^2r1I9ZO;//u$ZAT[q' );
define( 'NONCE_KEY',        '/+(<rhPn8:64~~wEC rxGx-#>t@^2oDra}fm6X~/`27cZ/lI_K`HN)mv[so{XR<2' );
define( 'AUTH_SALT',        '&!BuQG7/|~:s#xs!?sY!BF{?N2*RlgG!7=K`VK(b&gAVsl9z(!+BM ~5^0L .oO{' );
define( 'SECURE_AUTH_SALT', 'G-CJzVq]5;1FI/xkx2<eHbilL=gY}De:if(/o.zv+}+|qVME)]PnlV[Dahuy=VUn' );
define( 'LOGGED_IN_SALT',   '#F`!:Fat-9o>aj]X1&z&jpl&W],h5|}V4aWnXwg>uJFh]%,@g_T&dUqnT7i.6l=G' );
define( 'NONCE_SALT',       'pv!l[-&pC1}p0G*q- QU:B-G&/%Cms8Jh)F8C)N^a0psL6*RIx@#Ww9.[}a.V6f.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
