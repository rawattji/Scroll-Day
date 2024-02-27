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
define( 'DB_NAME', 'scrollday' );

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
define( 'AUTH_KEY',         ' PuN.FmlllUwCFzsGGoji>7aB*+lTmbx-:HwcSY`v:*&frLT.Ac<`RLKY;z6Sp0v' );
define( 'SECURE_AUTH_KEY',  'W.R2R|l2LB8*nOofFQeLOB]wfhYVd+U736w07[s/Q}Gx*, Ve7;  /,/z{~Ox|JP' );
define( 'LOGGED_IN_KEY',    '#R}6R9;GMhim?w~ySQ=5r]i&a</oenvx09$M)(ClJBkM}(KWR:?ard>~U3kb n92' );
define( 'NONCE_KEY',        '87Ih#g.!G5f>1vkb8r6&I>Z{4L1B+o_I1xm[yI|N6{{:n5(r.zE@ teXKEL#n} 6' );
define( 'AUTH_SALT',        'Fma!_8a_(7d@^p$6x,N .<J+D{dqIqKpwOtGdM#vCo1ld9!G9Sc.kWR/+Du6@f{M' );
define( 'SECURE_AUTH_SALT', 'O3;-FmpQ&PE4^T5[#W:pl)^v~o ^;=!9; `&|6SG*Fe)41jH-9L{Vm AbL1hQ[]=' );
define( 'LOGGED_IN_SALT',   'Sy$4~+ZF5:4]&#gO~WOfEbUZaV/bZv_^A3~,wq2Ys}]eBf.-CnIh }f5/#*oDn&;' );
define( 'NONCE_SALT',       '=&D:F0-.xo|Mzy2,#/>-R).;:p6|WIXgQJq_SH. FdtD*~@s+p=C8k<]qJBmg/[~' );

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
