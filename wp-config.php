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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '#3u,]JWEK6DI@W1T4zv-L:Y=L2&_Z4u}HQB|Lrp0 BK|1$,zg6#~D^||tZ$@Jg!b' );
define( 'SECURE_AUTH_KEY',  'R%ApfuXnc_Ndn}UtQ+|83a}.+uA}{pKTm=oUS2U!&`OKme8Vv],f2UW?^UTnved>' );
define( 'LOGGED_IN_KEY',    '?Dh+?]K>~!V[VId494-~^H-!1W-+wk{0-y^c,(7#>ORSVv; K5QwS6&$NeHxVTJe' );
define( 'NONCE_KEY',        'hg>G6.}6LWm[,)*mRS;1J4tUm;v8_Hh][o*g3d(Aa)|cw^#cF6jytHUWDFo4S}}x' );
define( 'AUTH_SALT',        'h,K:Z)RSx42]-e36 AW^/-gW=>Ec&#)+MaLOr|!}MsaMm(0$~f@#|YP[2Z=:hpso' );
define( 'SECURE_AUTH_SALT', 'gB4a[xn#PZXuvU2AXK6DbXMP$.1[YK]t/zDxJdtcK@K,u6YatD78aLy$kEG}m<2;' );
define( 'LOGGED_IN_SALT',   '7239S2[@rZuz8>ul7D(>2**<P+]4HD]B(2df||A.Vm=~. twPI#fXqr33GE0Nxvd' );
define( 'NONCE_SALT',       '96KybCnC`o<pv6~iSmgAvY%J5+3%{mKW3S@3CTxN@;d^MXuqWaF_-F<vxjV./z38' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
