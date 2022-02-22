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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         '<[7yf3Bc&*3+u)i06=s4Fy;l.no<6.kCvV*PFgc;IvM(G`f^TKZnN=rT!s|O|]:&' );
define( 'SECURE_AUTH_KEY',  '69n6}(O%d.8nS*NLr[47sJ~_|s5U&D|M^ZC7/O`[>@{lXp:V8TwAx9tRxj@8&suy' );
define( 'LOGGED_IN_KEY',    'tLyTXw<M$JJ`c6H3iwTIl5CMr ;[`WK{KV^]OozryHrl!icd^9wEJG!yTtDv67wf' );
define( 'NONCE_KEY',        'kvu!`)rT;b!ZMx9sWF|A+yg))2q+Mg%>6Tcl~WS._/d!pEB=xH |$Cmoy1fb%}tM' );
define( 'AUTH_SALT',        '+Xf&V,j{z}tPSW2vzhE]TLw~X>zh1|{3P8SRK-ui/kM9ox9U,kJEdex5N#6?%s=R' );
define( 'SECURE_AUTH_SALT', '88w,>_(n8FxO.~a}m38Osvc!j!ohoH-bA!i;bAm1B+n{(UA%)TCoM1yU(T+q-qXe' );
define( 'LOGGED_IN_SALT',   'qBd)KWMA-=NPB,[GQ7_hyJRT[psWJjF2T0]Xw!_^UZfU#I!_#8BSAj{vz$R!*rC}' );
define( 'NONCE_SALT',       '!*S*kUzwx:JJ-OMPACzsGfi1qOhs7[nfBVK%V}F#7Dc#83-Urpu>VFWYx5w,/@~b' );

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
