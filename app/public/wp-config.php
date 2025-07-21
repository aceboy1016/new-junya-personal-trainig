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
define( 'AUTH_KEY',          'dwlx?GqG~;474)|K?-Q`:zXXmiw6A?=~spV190q.|).@>_?_>1)Rph3IWTw;]YJA' );
define( 'SECURE_AUTH_KEY',   '3~ZGo|R,}BJ!@CeJ|Lyc<=;jl@nH=D-XuY20s50<RF7JfJqP]}]h,6_TQX(H 7[r' );
define( 'LOGGED_IN_KEY',     'j$DkN3b;H=cno*^9wdj~UcnX:) ]n lRp@$2Z9k9|)k0Y!l$0A^^7 !w]C7x[-ev' );
define( 'NONCE_KEY',         'waLNg?U UvnW~,5t;Z8#02(08w%OE}sss*%LG]`iV}oGZU8Zd&GGiyKE-i#U&1m`' );
define( 'AUTH_SALT',         '/!6(2%pF{}Y@B`TQ2|iYh/j3CH`2Z4kQ[Efi[6dP9y;Yj4ET^E.t*W*CU@W`JnAn' );
define( 'SECURE_AUTH_SALT',  'fqCAAJ%R1ncE][of*jI=N!Fgnjd30th=6Vp&GEW.KWCIJ4KEQa0i$NEIo_A71)Pj' );
define( 'LOGGED_IN_SALT',    '-&J@10(vLFFc [m9ug4UwCm|Ppl$@VNEN0|bJuj(G  yr/SJWh)hJ-+v!V&(}TN;' );
define( 'NONCE_SALT',        '.b{C~Kc-Mp-`t>e`[V3c.l}j~7 kPuxy`o.N4Exc5YCmnRT=U63[lsIKR;cXA-0T' );
define( 'WP_CACHE_KEY_SALT', '6Iz:+{8g4rsA{o?kNH/!G]c12.rwejRtb-en+p;O#OZmsw>n*<}yFZ)S%[mlXtiY' );


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
