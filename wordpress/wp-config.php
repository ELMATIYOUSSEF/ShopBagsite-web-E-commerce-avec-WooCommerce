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
define( 'DB_NAME', 'Ecowordpress' );

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
define( 'AUTH_KEY',         '203 C_RY`9+a):^X`86Zlq:Z}71R!v!OGqr7p[`q5Ho,#CbV1j%fbCO+bvqR6s6W' );
define( 'SECURE_AUTH_KEY',  '=O9/;8#<P$jUh,$YRg*w^#uC~G5rkDq:1y7w.fU#H40U&hL0}5Rdwv;}CR`h1YM0' );
define( 'LOGGED_IN_KEY',    's/xMR):ujetbg9VUD1jYX$wP]6,f$&A+C.L1E4#+]:KucDune0R_>}NI$JWbc,6>' );
define( 'NONCE_KEY',        'waW>>e(|:}<^V(YI/V27|$NDA5FX3S+2=A#E9Z~(b$,/0^<30%2M$w^6wMHSW(*o' );
define( 'AUTH_SALT',        ';{},1Zf2lM##,<~`kL7W.`U[jH7g.Au<^I@A=}tX/mub8{!EnZs^4)a/DENIAiQO' );
define( 'SECURE_AUTH_SALT', ';]?E 6h0,dd.[`{K/>P,g-Fq9:V:&Mn8[6J:b*t0z6xmum*uRqaQBPEP2|0kvKi0' );
define( 'LOGGED_IN_SALT',   ':V6t]ij_8~R{+KUzt(4E~9)$W}=Z<NH_)hI@r*|.kIvJL8K2/@jj_.T]1Q.]3lNA' );
define( 'NONCE_SALT',       '`YG5z%e6CubqSfqxBZD)F.vS8/}<x[Timy2oU@{b~18x[0FMn:012EYl5|[+*?X,' );

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
