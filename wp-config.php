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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '(Yp}^Z>6HB3[g:&}CKJoc!>TPdA?a8)O#3PBM4j~z@p@f$/P1wVPP,IIgzBepQy*' );
define( 'SECURE_AUTH_KEY',  'e/dcj6hI%)Y*8pKd5LqlMuowo <9w,KeHxal%grjuXqow6KNAbRIx[l0hiV#^kIJ' );
define( 'LOGGED_IN_KEY',    'zr4cm$Q`U(oIwgPZ@5}Ml^k,P.YHR9di/?DZ/u6^[3=<_J2:iHxou3Kmf| 2WlCC' );
define( 'NONCE_KEY',        '9qQ9bZ8xAe#,AA)c/H)V>0B0f.I8th#7U[`R.aMbt*04B<n+#go<Kb*y1(}U=C%L' );
define( 'AUTH_SALT',        '~G=fN qjes+t%~GTTFw5sY};Uei[$D~uE8!45zs+_$IYn tQ`j#~F;WT,y4>__d=' );
define( 'SECURE_AUTH_SALT', '~eO@Kn05OL}w_3%2#0<EbqA-!/X3RxET_mIR3{e!:WF>/k F9s/oVK3UX166kJKz' );
define( 'LOGGED_IN_SALT',   '3Gi*_Woiw>tQ9qbbv@Bm}c7M!CT9aQApYKH5B+RzaF|u^YWS)fzbtZ,4}O;J)u2$' );
define( 'NONCE_SALT',       '281=[/J`o6_hnk)/>^Qh_82k9#$)3=>.u]Ck+Ht+)w$%h&%HVd|qR1{c$i!.|CaM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
