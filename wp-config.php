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
define( 'DB_NAME', 'kedr' );

/** MySQL database username */
define( 'DB_USER', 'kedr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kedr123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Q+,T]=+RHMdnnF|xj~-&m-Rv,TWbmCwsw/C8nVH!lmC.m.ZMc0klkK5Y*|i~HM 2' );
define( 'SECURE_AUTH_KEY',  'X>@S0h&iQ=6v`lSV7RWQbyvRj eG<<I[;Pk;>p1P/#8>P]=1nD4sUE#Zv~fm!vB8' );
define( 'LOGGED_IN_KEY',    '@,tQqC|<a;?uM*Iev8acU-;%Eh/eX`65c0~t^elc2GkIeQ}<,|TK:bs?*<8m&?R~' );
define( 'NONCE_KEY',        'lSE!fuu 19v}{{l0R+BmI]]_2*RDKx5EgLXcg [%:Vd.6 kB`?T_ehwF;#]BC7X&' );
define( 'AUTH_SALT',        '65h0Q^3>}eJpF.afS(WEMnSz}R;83J2?ZQP<iB,x(u*X9]uHl,L;]P5K.BCTsIz^' );
define( 'SECURE_AUTH_SALT', 'Sq*+I9Hc]I(pg,|@}78IZ?Ty/ySCU6(}9);W+sME;+]wq6&lNX P<tecY~d|i`dL' );
define( 'LOGGED_IN_SALT',   '&L)|n~r S`Y:$Ko|7$yeWenv$FZ] v=1&tQg{dJtt]n`MDsZH~M{2X12Pakry2Cq' );
define( 'NONCE_SALT',       'jx)lCeA`2eOWZXM/e*AsoF~q[1s~fO0sZm-$qKZzV57Kp)Rw8+b2hy^a*0PKd/QQ' );

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
