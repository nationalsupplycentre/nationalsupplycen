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
define( 'DB_NAME', 'nationalsupplycen' );

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
define( 'AUTH_KEY',         '>60W&BM1Hqnl~nSOs3/V/Z&GR6F5vpL`Z9i5aXkeO%?:j%B<$r<{^D!0$3h~Gw.+' );
define( 'SECURE_AUTH_KEY',  'k#$G5CVG,kc48-3x|fgP:drvM#6LV)J=PG)JVgh!}0s=-E7r{dgid,b-7m$K.V`C' );
define( 'LOGGED_IN_KEY',    'w$^2n7tG`Q~ 1/|N;+Oxyz*;Jczn/v+@#/EL:>k`yyl ri-G{ygl?d];k8[+F;(R' );
define( 'NONCE_KEY',        '1Q.7[A&nTR(jd+8%8x)@3@X8.l{BL)Bv?H]]5;]+;)OoK f<6jhgmtcLix:I@DY[' );
define( 'AUTH_SALT',        'MB HS4f:K)SS090$=Z2`Za)W=tdOvxjhq06xOxwn<7.*.]e#Yhr@6.,Rb}=JCM+p' );
define( 'SECURE_AUTH_SALT', 'D@KZ0Za3pon?mg7$``bW>NK[Y}m4ARN(Otc5DsAL)_:v<vG%]i,BLfgs:LV[Zl*?' );
define( 'LOGGED_IN_SALT',   'kc>h>]?^c?xX2mADJ|!mMo69ff^[ES>[XzS7xx7Y Sm6K*Ua> stMwP>P`c7 I-9' );
define( 'NONCE_SALT',       ': `C[a5ukji?,;/S>0b]etSXZ|cj}+0:!e@}5l(ic~s~?9i9UC=wiF#)vnR;1l]N' );

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
