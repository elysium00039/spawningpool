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
define( 'DB_NAME', 'spawningpool_db' );

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
define( 'AUTH_KEY',         '8W`.e!HZE;N1J@,q/k+d1MUzAXafIH8{>2fli78-ERd0kw_2{vbibub@F}ZeL[hR' );
define( 'SECURE_AUTH_KEY',  'jpv wo&$6g;KTNAsvTy./4e7Gua|?pLGm<8|m`~o@yi3.!-;|{x`!9J`];,BvR7j' );
define( 'LOGGED_IN_KEY',    '}`L%N#;6:YN/iT_MGlarbWgz;eMqy[hmUm]E9V(+2bd2)W@#_|182<}%jlBA4k[A' );
define( 'NONCE_KEY',        'Y:d_E1 !,A~rC$cnO1(ctb/=48H!@iEE*hXaX0y7wxF(vUpt$soCdn_uoetc`{Y)' );
define( 'AUTH_SALT',        '/z S3a^gYO_A=V%|oF_r~&_,NAB]@sMnRcCrDL.|KV+HhH8lh6j[bf?~@MM|lLSk' );
define( 'SECURE_AUTH_SALT', 'adQjD&|XC4Q/BO!TpU-dsOtD_4mlMQwGhE=K(U9Meu:}XeOX;S!}^7C=R!iRyNZo' );
define( 'LOGGED_IN_SALT',   's)3KmPnSz35tRi,vClhKoyu=?9O(.5B#r_lhsfd#;* &GL(Jx5ly58=p9NwXQ]Sv' );
define( 'NONCE_SALT',       'u [e@vd{fV}^DK@F=@4gY&w[!(fT0G[;8!r<e_^<jm=nZ:-n*bd=Sz;t&RP%.R)M' );

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
