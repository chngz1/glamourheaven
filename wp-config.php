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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u900825059_O1PRR' );
/** Database username */
define( 'DB_USER', 'u900825059_Z7uGO' );
/** Database password */
define( 'DB_PASSWORD', 'MWS3JmdRGX' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          'T&k%Nnose|SAxehw:dh>z?9j{Ou>BA 5tIaDmUV}i$Jl)XYb}~TX;! zth?%/-$P' );
define( 'SECURE_AUTH_KEY',   'kCVzva8@ Fx?]g%l})ISLW9:r3VEm]:Vc/W#Qfnb%p>8(A8-9j^%1}juJTzT}K?g' );
define( 'LOGGED_IN_KEY',     'Wa?Yl%JL1IF(Gd=dWMpO^*MGj=_V)/)G%N@q0y2vaIY|qyDov8^b7O28{oO)u5CW' );
define( 'NONCE_KEY',         '`@)B821~6Czg.$?9^dX3(bC:Y]|DhTH-k-`x$23nh,R6?=_PmF[(4O>mv1cQDVKF' );
define( 'AUTH_SALT',         '8t{Lw@.WdkQ%&nGr<Ge-uV-WZd@kAtd],5$-2NxAXh6[WKhfjZP)(FtJ{D!b3mp*' );
define( 'SECURE_AUTH_SALT',  'O^{JOS]^3? ,wl}{$3?>_SQi(2 tB;N)wN ]O3$C2#I3KEVMO&G7~1R!m_7`=z)%' );
define( 'LOGGED_IN_SALT',    'Z^0Ia4LybHyJXRhuR:<#Q<.]f4 >]4R`cRg6X5[cv06M6pL15<ka__BZIlyc|%$r' );
define( 'NONCE_SALT',        '}3dpG/u?Kib>7LY<8: q@w5i9;H$q|[mT;u^`#Pi.2^y%6?G>U;`j#9so],$7{ff' );
define( 'WP_CACHE_KEY_SALT', 'xZ0Vnq`m#dTx]eOdO0cn?Wp*#s;Hut$v9ugCc^QnIcQT}HV<%TeYhY/1%ck^PV*J' );
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
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';