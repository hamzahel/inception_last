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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'alfrido' );

/** Database password */
define( 'DB_PASSWORD', '123qwe' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'qR%s{y*~[^4NvXZkht``6YFAno^(w>kpq}$qU-;I,nt/!Ej^Abr!Fw/vLm%~R#[D' );
define( 'SECURE_AUTH_KEY',  '`2QmeU6_E}+n@JXtinDy:? 2[*O>33} 9,quc+7R=@!_,YC^;f7@Y)M]j(<i3_$l' );
define( 'LOGGED_IN_KEY',    'vk:Om91+PBM|zF=fC/%)Pv6KUNKFw$t]Q)q7JHOW>GHdv:T|owI[VcCKMLgoP1cU' );
define( 'NONCE_KEY',        'Nw%/_iJmEF{mS+Od!W?{qJ.A3?--ex^43g>xk85uKyDa$YF)wIS%SP#O+Y Hx<-<' );
define( 'AUTH_SALT',        '2<rCmsK{kb,3Xx_YpbyEX1f?hW1_1uK& FOB#ROED)_w8sd8QX/LH<K+{@zJgYH:' );
define( 'SECURE_AUTH_SALT', ' uO.TptL;42?Drf0]rwrB)tiW<3?;*;_D=SG}&]  G^e?v_@Gj.ZAH.HqUW+l^wm' );
define( 'LOGGED_IN_SALT',   'LF)(;i$ o%=,?ZcQ8kq`>`L_6#Gn4u8n[#r/Z{K=0$%c cG8mI0#0_)mH!F<^A,1' );
define( 'NONCE_SALT',       'CLv}:iHul<7_swjQDIqY($dY8mY}m::7;G8>:CI$GX3%jg m)8(5/~ +-G!l6fJ+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_alfrido';

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

