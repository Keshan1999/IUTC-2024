<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iutc' );

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
define( 'AUTH_KEY',         'cv]EAbh[4~/y:*gJ>EX1Gp8;XQ7a%7U@:rx4B}d,Pf#xzmQhri` p5c) um.,3ju' );
define( 'SECURE_AUTH_KEY',  '1/C>1t@*f=gFuO;5|%wAeM*! d<~mp.A9cNCvokUtc>Qs>L:V@.f4sv~PUau<B_1' );
define( 'LOGGED_IN_KEY',    '$t&hQm|aNxSV&(75(9,75sj+ n2>k6OU,T$B<qf)boRl}o~eH[yOh_0T<pPRo|W0' );
define( 'NONCE_KEY',        '{5C4!=U3xCQPJSR!{1;i4I|%x?)ZP_ Q;etM.@l<i11UczJaEn8*vAh7RV6q?^yA' );
define( 'AUTH_SALT',        '|lO?x(@K*L,$gSOxN!#{;<#=`jtqHw|*m]VP`t$W}chAxiTSF7 b)a$-V_/r6fB6' );
define( 'SECURE_AUTH_SALT', 'kB+Ze#]U_iW_n~XEk|SLl8Z&C[W+L$R1)xK?>J!%b 2Y(}QPFC,|]6m950MH.KnS' );
define( 'LOGGED_IN_SALT',   'sRTU6`T6>5LGPqkG&a*}*ew[W[[Z>x}>b(J8Fpteq%n2Ev.F]`T5*ugrKjh#:&Ju' );
define( 'NONCE_SALT',       '5`zcAGC/rIS=N}g|*Uh 5c@?O8=hPmOek[H]=?W9_;,Riy+wIxq-fGTz*`~VS R_' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
