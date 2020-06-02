<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nationalsupply' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RaMOF69Ug(~/qn~nt%dw`,e%`uMKjjoC<+`^)t_ivl!Stxrt^Xodwn|ea:{V)66(' );
define( 'SECURE_AUTH_KEY',  'w{&1Z&]wW-{VVM}F36$LTw_{Cx8:Zu!Wrzgwsr1Wo*7!gbii[ q1IY{ocQ0aK1kj' );
define( 'LOGGED_IN_KEY',    '~en1Q^0F*Jy,Wc2n}1)?H-?~|-iOAqj&]e%*hSeIJH)uC:dRz&^m]+0nwkZcjYGC' );
define( 'NONCE_KEY',        'N-]7 UfAQyI{6c/&m{CMkJVld}[xcS.Lii,D`@F1vn5H3HH#K{dz JQ1{U<DH~hU' );
define( 'AUTH_SALT',        'M7_weuZc);kOyUQ(4IUWq7RB083!nA3m,i;YR4Oz#q@b4edFX!*`SFb3M7:jeS:7' );
define( 'SECURE_AUTH_SALT', '7Z_-O?N%|PEUT)iMenK~BjCm*)_Q*[bU]C^pwRq5(L(diO3Q#xflEVr`FY)CyATT' );
define( 'LOGGED_IN_SALT',   '1uW0lvu;Mu6z!|oi9BwkB(*HU}.l*s_vybQ@J*U 4407%u1/{S$,T1z!_O`IrYPz' );
define( 'NONCE_SALT',       '~>=l#TlyGuTbFwLZMZUU/bM^>.`HR<<Y/NGZ*/pUG+I$g~F,tdrGvIlde<g[%*hA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
