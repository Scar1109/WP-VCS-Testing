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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '?$z8*[Sil8}X#z5ng7{,~:,,ewJNQ,@5xh|>zq7;2@6aiORyav$XFB:bMM#_}i^s' );
define( 'SECURE_AUTH_KEY',   'kiYpR?OW&W?|.5?trcgz6grE+2#:pLw0/QA|<_s=,;;b#x=z?0A8*Gr%p<)B[0=<' );
define( 'LOGGED_IN_KEY',     '3RG7[i(f)W}RF9~88t|13=+o_6J#6CfRHK(.B;8-?[0RpgDXhy}aX2z7{o7Nn$Mb' );
define( 'NONCE_KEY',         ',sFoXI^Ig_bZSI;a8`|xc{MZ$%l3D,1/(3oxLJ sqVSP[vX*n9DF1C]n?yHp(PO7' );
define( 'AUTH_SALT',         'tbiyeEI-hp( +YTYC#pwscKR2l=1>8uF~l+RTSA!X2bcx(X]pa5ubAZt*ne2wTZF' );
define( 'SECURE_AUTH_SALT',  ' /]GVA+Gzk~}n}Cy/q`cx=I(P|!rwa qdNu.$v(zn0h)w9Su:LX~q=cwX.fA/ED`' );
define( 'LOGGED_IN_SALT',    'p%ZZ@h#,B|b{8ql9MznZirkBn`+QO1(l*x)Lt2C:fAD2<,6W cg2(Uzq,&xn{n.p' );
define( 'NONCE_SALT',        'LwhD<7ZTVu@l3:S].A6(FoT8Tmm.k_+OI;2a$u{8=qh{JR$+i3@V~f7hnuWF1zaZ' );
define( 'WP_CACHE_KEY_SALT', 'v{4_+aF6.!Vi!_7rnx.:^qK^:zxO^c[*xdFL}m/W}UGo.+gbr 3s=QVS^iSPIeZ;' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
