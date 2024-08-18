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
define( 'DB_NAME', 'glamourgaze' );

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
define( 'AUTH_KEY',         ':uex_5A|mP58X7m@(&27$xV8%{Ql6pu=ec(oS|-*?WkvhG]^Z:)sK`/EssO;sHUp' );
define( 'SECURE_AUTH_KEY',  'x8;d7kX0U|4e[Kz(bO`vzM!^#a45$LP7yAtZo]KEV?j_Wpn9o5.([mpi$aKGSF&M' );
define( 'LOGGED_IN_KEY',    'NG4(jrqf>?;T3.3LS< Lo6X;k^N3G-@jxgi`CneJRcYMrG$%;?)U%XOq[^#0+^b8' );
define( 'NONCE_KEY',        'D5Nl@~6f^wp:C-{7Zx?LVwZ_z7TRqOU.#d.HX+P /p4p2:mwRB}f)yaNfJz:A+^H' );
define( 'AUTH_SALT',        'Vy$Jc.CZEvzQ%WvK$tHP+8a;[Hc&S7%vAToI>PEJ|HU5vCqT4O2ac||iRVa1KF8e' );
define( 'SECURE_AUTH_SALT', ')dNy w87c<^m0 K3U~*~ :~#:YQ37jK566S.+&5`4#^4yA4gzz$:{EW7^v}5mjo`' );
define( 'LOGGED_IN_SALT',   '_P3}7&-s:+cXQ7aXiuOCt[jHV}x`3,;?tjKQSn}{.T)-DPmwEMR<{/Q.^O[YOK&4' );
define( 'NONCE_SALT',       '#,4X7[mhAQ&.A{:GxJBG(kg[8p^H#&Jrjxb3-1Bo(Aiv#BwTNt2%+w4N$JN^jOUu' );

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
