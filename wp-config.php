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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '&}]%^D@D.X~Hm]Ek>UBzNG@dw*@.rRghjv!|X$PD@TZgw%hG20eP=TQk!U]>)f!?' );
define( 'SECURE_AUTH_KEY',  '#xt.@1$hm+3KQo/q1&tR>PzPlTC[F`.F$~Dd+{+8,?jW<z+Qbnw|Dp#1I3BMgB+_' );
define( 'LOGGED_IN_KEY',    'JGuTKnOgjh4l*4wXy*)M_S2g<s^?{|`]MSi/:riAS!%iM84@,AVr-=asz%535iB3' );
define( 'NONCE_KEY',        '4W|7y/@Kqo=$hAhH4-,}Gnrj5u%kl}DF]XAu$,G1Mep9I3T<5`WwUi`D_`gL[~::' );
define( 'AUTH_SALT',        'Z34Uvf%uWEvYjBX_2{m1U3/k}(oE,!e@*#~RX(9{I=l[:nx1LwI8B5*;wcNlsfc9' );
define( 'SECURE_AUTH_SALT', 'b8)-kFR?[Ceg5oF*u :Hrd}D:R4c%8 ?5IP&*fqKPslAqfz=.Dx(zg)NR9BimBkq' );
define( 'LOGGED_IN_SALT',   'fw5{`@)*}i2d2a)e3Mzq4SuY}bEJ%xq0=XT($h}{s_K3<Hn4K&f^#7[YGXQ14[dL' );
define( 'NONCE_SALT',       '2LY1b^~PkRGaf:Aog9]QV@Vk Os?C:N5C N@oz>deZqV!{Rm.x@R)SNA),m!el:y' );

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
