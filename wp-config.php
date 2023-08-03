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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zadanie' );

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
define( 'AUTH_KEY',         'oFt0`.~W>5VrG2.tTS4_tY5AzOtdb>aU7}P+r]/rz>KJN(hn/oD[{;@hkp],WLCl' );
define( 'SECURE_AUTH_KEY',  '%JrtOi(AFoB7;t,aopE}F|t-*inR|6PR=sY8GI) dP:A@=,@_nD4F-lO{0ABT<?w' );
define( 'LOGGED_IN_KEY',    'ZYBTQ0wma_(Tcay{?!1zP-rnAN>e$_,>HcSC%jj}:0[rM;BJzry%S?QW}MsH:3Qi' );
define( 'NONCE_KEY',        'hsOi /$5{u!p_chur5$d&3}oMN5)5x=pX~|EU^zl}jJ }^<L<74E/FYnvmQ?t]^,' );
define( 'AUTH_SALT',        '>I|jSdnmJO^oAXOo<x0M]Jew*^[)~q07hv{x$p]93J`/7$O<p)0R<~ rW2o}B3.c' );
define( 'SECURE_AUTH_SALT', '`(yP7t#U0FNQQ>-_GGXQQ` .RO,U[aGmbAFS64>x1(eCr8tcW**kzd?5H;hm}XQm' );
define( 'LOGGED_IN_SALT',   'WY&Qy[]Cmm&hi7-gdpZ>5NrtfxD#75=mqU_8JJwa`Ips]fY@@jd7DOqWx_zv.4DW' );
define( 'NONCE_SALT',       'w8a2Ts7Oz<]6!,u?ay]X?:XQEv~2sm{wNwa-!pd2hA2/krJjl}c$$-VBqGT;a?Uv' );

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
