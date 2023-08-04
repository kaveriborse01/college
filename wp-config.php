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
define( 'DB_NAME', 'college' );

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
define( 'AUTH_KEY',         ')_s301FsLy-c],(P<Lm$,cVppN,0bma`J+j.V@]NK~z<0QPEuH#zBRD=JFbz5o9|' );
define( 'SECURE_AUTH_KEY',  'Bl)$y~B#L;C&n!r?8O@Z70:6cD9chPwRFID!a&KZghCc,gci!$h~hDZ&ru*0PjR{' );
define( 'LOGGED_IN_KEY',    '!_bH[8Mqjm}W11sX %:n0i+!j$H7?^x`@%5HZ/hP&Yklb;tL:T)_LUi*]nWd7Yef' );
define( 'NONCE_KEY',        'YLt H2{r0.9!fCR%P3Qk``Aj2T]e]844/@K)qWPw~rO[&aXk::-c~5a@F#jaqkBm' );
define( 'AUTH_SALT',        '(7I@F34B-n8qq(:XJ&g7#0ClWo/UQ)/|2?h0Q7VdU}Wpfy#TKr8HO#fCDXFjV6Hi' );
define( 'SECURE_AUTH_SALT', 'eP ]0fT{P/Ib<9pt~EI;BHBawxk&$CF;9mafA9&ygWQR]=J.=Nw&V$d4+gfmus}-' );
define( 'LOGGED_IN_SALT',   '*rx.;V_FAsKE?Eu=r66_k;>iR#{LU&$n^-|7(D)Obzf*h/ o2ow+a8)y0o@5@(Dx' );
define( 'NONCE_SALT',       'Y:F~#%3J8q;q9Rls%JWy5K%m(IZFpEo]Gh@2t^1:d-CS1NB&QWOY,perVGYl=3,&' );

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
