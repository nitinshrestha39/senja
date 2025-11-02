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
define( 'DB_NAME', 'senjadatabase' );

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
define( 'AUTH_KEY',         '[VOIqny>XN[/x|@lF+63soV46iX]/Ks@!yr-pz;P^r.%@eKF[mD<mz9Lr=zPJq@5' );
define( 'SECURE_AUTH_KEY',  'G_[?ki+l%eag^lN#$.1?QijMJQ6mDhnIC>#>UzT.ql6(~Znw2H$<{NU7^yx,]_jc' );
define( 'LOGGED_IN_KEY',    'I<~h HE)V]U%.u$ZOvz1a^07Xh?^X5jdmBEN/`$-wBRZ+ArLB)FjS/v? )~XzL{h' );
define( 'NONCE_KEY',        'aA:cuFYSD5}RpYXZuzZ<xIj}K-qr0s?_iJ5Y4r M$$m$)Fc@DM8mJ7P3bFyEpvBa' );
define( 'AUTH_SALT',        'olM9Fz##km/B|smt-Fo9g^q(nw=VDe#-B5ox}nmu@z-C@@f GYOl6{2nG3|$eD[>' );
define( 'SECURE_AUTH_SALT', 'vC#L Cqr|jp69K9b,7el+eK3<:yRcCs>s/byBsPcw2muNk3*sl=S,LV#0RLcMNCh' );
define( 'LOGGED_IN_SALT',   '<Pqc{9BV,0cub.E6sq4nfxyMHs#L=Q,1~ {!vkgA,m#nx=u/J[2VS^EX~EggQei7' );
define( 'NONCE_SALT',       '+_!}#f`+gWxOgZQi|OnGtcIc=TKrIF?Sv+F4K.m)j)Dsb``Wvzys=xa)Zb{!4<){' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
