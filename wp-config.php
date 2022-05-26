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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'Be8pUqYqW[HgJeT5onLhk|mZiys3=.W1,&yO#_j{K-f@IN5ei+ynvc^i0mFWl5n%' );
define( 'SECURE_AUTH_KEY',  ']{wZA]}frImG9ji]o7j9>pbhX-n+oBOs~fx,m;N[; 5;@uadqD;K;YB)EMF4_Sc,' );
define( 'LOGGED_IN_KEY',    '&u4Rr1]9E:z#NW--G^GO0<c+QHx-eq^Kg[|4!Re?rcKlFzG~<FpPxj;ejc@0xTrF' );
define( 'NONCE_KEY',        'Zlv(dsJU,eb9]sV/*:jBl~<02dB7&{WNdZSTf4`SFaQA`+3:H[SvS,hXFy.(By8K' );
define( 'AUTH_SALT',        'n0}H>RFQ;VqE0=q=.M.fT_avR=`Q+*/9mvrhKO4xa%L;&lH*3*)a~ojt`P6%cM)F' );
define( 'SECURE_AUTH_SALT', '@Ydr6z9P_/|(OfK<cWz/mGl:_N[}5W8<JEh{dZ/zEfiaig+8nN08Y8,#!3GzS/8(' );
define( 'LOGGED_IN_SALT',   '},*#N7`&VH+Wkh1c5*gc%c9bkrscyB-Q_2;XuL52yGb>)7TdSk[(2M}W).Oy9n#P' );
define( 'NONCE_SALT',       '0n_R$27j;<SO#BURgQHz%`;N.4fJF3,560Co}f@%wOnWL8YeAe?pA9+1Nqe|!<Hv' );

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
