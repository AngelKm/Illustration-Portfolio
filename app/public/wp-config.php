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
define( 'AUTH_KEY',          'UCCTo?^)3>{5LAw23puS*}@!5kqG+3Y~D~]f/U.,VQt^6r1OAC$86dTi!;><nAr]' );
define( 'SECURE_AUTH_KEY',   'E[$9,/`<kN!_v-$CP%{I)wyWwUvpH(l%BdczX/*f2QdGzU^1k.eYC5nJ%7vA)-)/' );
define( 'LOGGED_IN_KEY',     'Ic8SK9*FD8^>0<CA2m0TTvdH]3m66@1>k;jCG%/@Y*T2MoF3.Cr:[F>7Ye=N8|!}' );
define( 'NONCE_KEY',         'tj1Tat{Lv|;O1,#9?edVhW*_9Ny6hKp,_oE%8qHnimu5+efEca9/]xXoftu1nT4W' );
define( 'AUTH_SALT',         '}H&o4s(f,*.!o ]!#,[7 av*}o`,g[2EIk}j9c^c5h-xJV(B[6r?p&]D}hh#IS 4' );
define( 'SECURE_AUTH_SALT',  '?FOs7`z{xSJ`&$puGz_y/NNJ.Y{K||QY;:O;R?Zr8-qmQa7RqwUw!XB}b0mr*=~*' );
define( 'LOGGED_IN_SALT',    'l|Ig/wjnbsKpr eB%C]@(wy6MBW%q$FpuPGl <Sa#vn7em~s9I1mtle^:tnLEGRW' );
define( 'NONCE_SALT',        'eFASuwE3qo-@Y(C{ZVb/<?-Z[$mW_KJ<c[_m5|ES)H/TiFL:|4Uk^HG-d8Dd~@[%' );
define( 'WP_CACHE_KEY_SALT', 'Re0z&-ucaVi2>3X>[>NUD:EPKsrr<K3tln!-?8Zc{H7ihGxZSb:o>L4H6BRJPSs&' );


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
