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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         ':s0XcEag)IRnq=}.g^nRh=;Z ~4@l}Q 1g^omP=F{9dGhow/^)IFsCAu3!R)r`sC' );
define( 'SECURE_AUTH_KEY',  ']>%srb.D|9UOV]}swUlE+~r_1r~u^220PoVl6<3Agog*5^16d>u^jep^?GEfn/NF' );
define( 'LOGGED_IN_KEY',    'F<K*2ATexIb}Dws(S]|x% ???/%d@57W_qfMkDt*W!=2gz9g7yrWz3qh?mJzkw}h' );
define( 'NONCE_KEY',        'E&qk+KyLst:a0hGRw8Vc<0K5/0ztr#t5wRV,QXvu=]-k7AP=hikQb[)B[4@`j4Lt' );
define( 'AUTH_SALT',        'hw!uKp$dxwh;8%f^Y.{;NJU90AhZ0]eOqZ8gdY_8xg_Gf?x:BDxjB?qkrSEqv4(c' );
define( 'SECURE_AUTH_SALT', '/+&x`1!#D8X}hKaKZ[P8px&)yIDN a|k%1O1I4:dT9Ak(s=i;Qdwd}2E_PBN.S.(' );
define( 'LOGGED_IN_SALT',   'jQFaC*4qwzu.^wD~[Qd#NrGlW8/{w+sXa*WI7~&8uZ2-XF2v]*aot!,,Z?aD3#y}' );
define( 'NONCE_SALT',       'czK<>S +MKAC@9?$tA%>j$r`QTISOoQu;qQ#cjw,D07q`1t]KD/@U*$R_L]KeGNj' );

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
