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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'alfrido');

/** Database password */
define('DB_PASSWORD', '123qwe');

/** Database hostname */
define('DB_HOST', 'mariadb');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define(
    'AUTH_KEY',
    'lmQfNZg>;XBW(;p$YMT+y=+%xxY}_+.tfyHaGfU8=BN^Y=rOW@OK.<P4EHF-:%B!'
);
define(
    'SECURE_AUTH_KEY',
    'Bn)(hAVml0:l|2-bdwfS9|l>:brLwzmU(0f^_`o!n_nvz,R3]^ )K=-/7c9{:?=3'
);
define(
    'LOGGED_IN_KEY',
    '&pOx?)Ya=%OWR4w$&X-sv2eW%9+Y0|YHKRiU0*|d8d4&U^%i;{,;+:`~am5k3Kl>'
);
define(
    'NONCE_KEY',
    '^@@8o:1-D5>|whK-7fK-+wGVEs@,R_azJF`m/~lal=gDgg4*lUH`7<tNx St[&w0'
);
define(
    'AUTH_SALT',
    'TX{_QCi7Y$90FV+[[-)E&FQHksJ3~0Rp^gv>ip08qLLz*d-VO|hG}x5Z1rdY?Ohl'
);
define(
    'SECURE_AUTH_SALT',
    'eCwU>y+?SQ+eKw31_ JZ3x cM)s]m@f;si<Oy7#TAlW9^Am|d/K(!GpFuia7+{+-'
);
define(
    'LOGGED_IN_SALT',
    ')DAOFh IdnE0~N+tXhKn|C~?F(%gmkEg/.B`jq%|C;#:Jh2;7]mO-s~_#-XB$3G*'
);
define(
    'NONCE_SALT',
    'talVH@[R34q8>MyyZg}-e*#{WUCG+E]z4W,rSA]X6gDJ5f5yc uoKM-{mhWP-6O_'
);

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
