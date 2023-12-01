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
define( 'AUTH_KEY',          '*]4,mnf~pvw4up:`jjbFbz^uPw5V(qOce((-oy[`bi>ACb<{k6s+gE4uMNQ+-!zM' );
define( 'SECURE_AUTH_KEY',   'pc<nE^n_v|}=CEFWXvQts89b;(:UlG@18q3hC`}B/5Qj~(kt`E$Vjk?DWVVOJJ|4' );
define( 'LOGGED_IN_KEY',     '.T4nx_s_6G_2$@u=US>YUo-]Xho8! ~xf2|jG.lojy-]Mc l[h4_Vg`/+lC`EkC]' );
define( 'NONCE_KEY',         '2$xuA@P>g~)RcP>=R9R]8wjqwAI=4|Q>uTH-48~?XmUaDi<)[<*Pv*tsdl^}2GwG' );
define( 'AUTH_SALT',         'cJ}yUh81LDtf=tQbE>oT_p[oiWt7cBkyf{~XhE)BypfMT6@hdP}ZD{pxY1tdTSfd' );
define( 'SECURE_AUTH_SALT',  '=#90IJXB__9?=PB/9{y^H6U?>%/-mbc0qQ-C?Ya,4?Z?`?vx5 4Zk-]9qoDGXu2`' );
define( 'LOGGED_IN_SALT',    '7AL#$Qg4SjpI%MBPQIU=@$| yTKzZcD]<fHS(Rb1:/?g~uk~.`3HV{cV@n.re9HQ' );
define( 'NONCE_SALT',        '-|L3sxdT&S8&N/x7s..V-oN^t]rnJ+AlYI$;SAI!^J^]m>Ug5w?6/;asV~bzi0e<' );
define( 'WP_CACHE_KEY_SALT', '#c(%xEx:ONWb3fk8%lwhCrRC#S/R~kIEoC`y/c.B.O[PdSjfb)C6R;SGBUReik[E' );


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
