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
define( 'DB_NAME', 'wpelem' );

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
define( 'AUTH_KEY',         'I},Hj:VCxFjh^lhHv|EUubwD3M_`&u2mb|Y_vMUXtR;s_K}W1785)^$kHJ+Cs4gG' );
define( 'SECURE_AUTH_KEY',  'o]:__N6y!0Dy[[w!eIiLhBPAf}kf5`AjJ]lqudFtswd`)5G}SY8C|gOK#v E4xBL' );
define( 'LOGGED_IN_KEY',    'gLC-TOik6.UK8.$U-xZIe?3^ iA eB2&tiZP`}^cvlZEI!VB 5UPk{u<)$-d6w`~' );
define( 'NONCE_KEY',        '7wl;V+&n |b-YY[)czp}hK6b H)!U;`jvNC2`}[AF|==y J-W|f|P;V`ZCTW_[{S' );
define( 'AUTH_SALT',        '51yxmiRs01.&j.<sr)^{i<|<e@el?lwG+:W:,?>sO,.EY5~!Pz2i~;G1zX!hLbBD' );
define( 'SECURE_AUTH_SALT', 'b/*qvB-~5{$dx2!KB~?xga`%{qVMLgd#`PGj_=RxP(2_(|Xl7^xr_fo;skuJYx=Z' );
define( 'LOGGED_IN_SALT',   '|rAK na~8~_Jsu9oWm5$)w0D[S xynh1|R[n,@*jR*HyL;9PM4L&u2MpmQ[RdOzM' );
define( 'NONCE_SALT',       'T]G,3BATz,sjT&]-s!mSXir(&y)]L~4>TB4&{wq3N6#`KP} -D,z@1ZvoYqk#z(C' );

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
