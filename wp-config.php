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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Kg>Ny-(`UXf.m,6Ya aX%ac%<Q5!Tz9tHe-4do*t;50H,m#l&p]m f1/F,&?yLs(' );
define( 'SECURE_AUTH_KEY',  'mVE;wN<Z]k$FGtPo>H`:oEs^E.A?UC=@?I@jR+zIK.J]?{>s/K6mpt/l5%*+TJH^' );
define( 'LOGGED_IN_KEY',    '^<%acd>@69UM^ @/s~Y#oGdV%exR<?6C7>q0.M4vt/.g1B@o@Ai.[*0PBip2T?/O' );
define( 'NONCE_KEY',        '3WSNO2.(Cmc7F|C~1T =%Fw-;RnOjo2A)U3Ccfz xOxO1YA7myKRs,]q+maz}CcF' );
define( 'AUTH_SALT',        'zSjO>,L>5fl,{1[mG>]^Z4iz;nl=I7v_KcS/8D53g=SUwzt0H(Ga~e.9p@K+F0Rf' );
define( 'SECURE_AUTH_SALT', '=W{lPeW0|~W?,qmLG^J@t;-=;$gdNdrjcJ]a8:/Ur$_S3(-+> Dzz3YywOv>=_:a' );
define( 'LOGGED_IN_SALT',   'd!E&Ses7:fgfWt(c|yH6fT#vNhHerajKXzJPg@ay60,P>bFZb5Do4VeJ7A>]@M4l' );
define( 'NONCE_SALT',       'oZ|*Al:u<J;egYWp6HS2:!^ybe@A4ai;ivsO[N]$!!du][I0g8o2uU#2j,hmfqxE' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
