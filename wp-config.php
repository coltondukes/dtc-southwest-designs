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
define( 'AUTH_KEY',          '!kZipntPlQV~vy,MS1.D(b?xQY>teNricX^2L-`x(EO2+@J<5w[ !4h=-gDj6:},' );
define( 'SECURE_AUTH_KEY',   'Cb61n]:M8|Gt>+8Y 6$s8LRunxvgX.6J{2eKl^um5qOkkIhXz>,8xRFfn,zLIN-Q' );
define( 'LOGGED_IN_KEY',     'mF8RrDNF+)vc0^jnq()l=aIMDem^XQ1)YA*H&G-|aQz5CUNe+1G5j&S6]gAQ!t}C' );
define( 'NONCE_KEY',         '&mqG)&`83eAN7_>qU`eB_+Pvfpnb5WP)005BY~QP0WA|IZ[<p(|St$YbRhc3pf1>' );
define( 'AUTH_SALT',         'fl+{I,b(w$./I^(^uv?UJ}s36D?OTFcoKQW9`,#zTCaNM]I>6i.l+M}*Q|; ?nOc' );
define( 'SECURE_AUTH_SALT',  '-[T rDd(T,4u)M_s//eY_N_9mSF_FsPw f^81g#m*K3XC8.b9TfNF5@d^py]=l@c' );
define( 'LOGGED_IN_SALT',    'G$:OXcG!YQ0+%R[{n^O+.YPA(eufs$FU~kyC=W6#f?y6MNBhbEz^O<K92(kQq/*u' );
define( 'NONCE_SALT',        '(M;9A`NcXU>-|hwmxB*XSIUM7wuL$_r# G;sRZcj:V*[%f|OEJmKdSry]QhTK7o ' );
define( 'WP_CACHE_KEY_SALT', '>(:`!]sl;U9w7IW5QJ^rEg.CBKQ+v!>6^iI8h4-oc,)ROemk$`HjRLNKLb&F4_I~' );


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
