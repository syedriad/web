<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websitee' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'RrAauQVx2%$]7RAo3RJX1eD!;OSSpR{1,18) |j|TWAx{}OC;pd/cb~BS=(`~sX1' );
define( 'SECURE_AUTH_KEY',  'L{Y6$}_*^S!8`h_0<M+E(^[gOa~)y>Ysjn#-j%dI{v`(dEoe%vxFi*3ajJ^V`U1$' );
define( 'LOGGED_IN_KEY',    'n=j/.S@eg`iyVwPfcTQtO&Xu:*9+U3=W{6EY*%;6:8EiIM&}@Z/8_C3^e)_$V</ ' );
define( 'NONCE_KEY',        'DPPo!{@md4,29= w[F%YveE%f<@jMW:]_zd~4{IOj/P%U,1_[tR<g:nRITlW3LPL' );
define( 'AUTH_SALT',        ' ],it{maIsItIRauh,(}P`52i9[]aQvJT_L7VdJJ4q!P)Mzu7A! s~0hQvEQ{SFD' );
define( 'SECURE_AUTH_SALT', 'LK|PjTRB4i|%YFt~}S4,$[0Hd358-GVzcX`[kp,71Byj>?;OZ-:+U7p<7ftL$QZt' );
define( 'LOGGED_IN_SALT',   '%oHAEaK;p(8SS}u/0j-`d{Utu(5>#;]^N8%;$CLyO!um08pC|9vGmOf$C`EO=J0h' );
define( 'NONCE_SALT',       '8K{Zu:T%-i)uQq7b|5+Z+(w[CxmerT~<4x.c:AZ+c=lwZ2drBD[7(&I|-Hsa*S`m' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
