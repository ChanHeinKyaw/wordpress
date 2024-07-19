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
define( 'AUTH_KEY',          '.hynFyS>JNIG>AN1G-]@]n[:q4wnn){<23]~(]SqCSS-~b$?+0P35$r2us6`-mkU' );
define( 'SECURE_AUTH_KEY',   'L7lrIn/->n}KG$`o2@.Bed5QwgfV[]+)M 6I(C/H>&^PDknu`)s)>FzsR*;,k89P' );
define( 'LOGGED_IN_KEY',     'WC[+)2!jli<P Eb>S{Yf1t[w7RSv%*& v,iU6yJpz1#?LY4?Z]V1(6t^aeLHZ-t+' );
define( 'NONCE_KEY',         '6reIJH6f}y(v4?9gT:7`x`k>1V&4TnePQaS.344]x<uK>n|aL;{.=aK4A@6PX]!W' );
define( 'AUTH_SALT',         '<K}L[^?tC;qX %Ad OD,qIps%+wmWE]=,3g[}gkn]+V~~ /M&~(#N~Ym6LTG;K]]' );
define( 'SECURE_AUTH_SALT',  'MO-C3=Q4$]nc;#h-v/lswl-0n!E5}yY 9ZEs;}l4OR7vv1EjCI55-bR^t+a!riTz' );
define( 'LOGGED_IN_SALT',    'wTl09ajoU#0BAnT0u_a(#M=YM0gG|q.Zq/JW5tie;<[[W~iI-j>EkR_@PB<nHV+4' );
define( 'NONCE_SALT',        '02PKM4dCt0E_~bo>pEw]7CAyD&`(s~olTa7wl(U7`TLr[M-5e[^?0X%J[urJ}vnQ' );
define( 'WP_CACHE_KEY_SALT', 'CO&FE9Kvg(AXkgc@JYC(j$eFicTVXYAC%V8_ePWt^o#$_xY=u<+%/R^=w_Km`$n#' );


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
