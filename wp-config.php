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
define( 'DB_NAME', 'hack' );

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
define( 'AUTH_KEY',         '<MU@w}p~>mr:-?uR=gmyX;!pjO$,;NJV-+eu^:;Ayztjb}kFbhB,ugflAoGbdR.$' );
define( 'SECURE_AUTH_KEY',  '9-P_B ? e8yrrp&Db+y,lvWeoMkH#>GFM3=9A|TNVHj0{+R{`LxliX^8}L{~}V]p' );
define( 'LOGGED_IN_KEY',    'QqNafC(S$msjC .<BE/WMb2jVSX8rHa]BCQ}3f^kZPp3lQKRN~=1M^s-,b?nSYZ~' );
define( 'NONCE_KEY',        '^Rx;@J.D& #HaENt|I?DtYDA5;IgP|pKe/6f+9rJ23n(BYx9jx-~T/K)Ku5XPSNj' );
define( 'AUTH_SALT',        'dL[R)ryi0V0bWNOIk5@3/>Bnc#y>5H;$iHLMJ;$KCzxV{sW)q}kZ0*pphCd<jgFb' );
define( 'SECURE_AUTH_SALT', '|Kfq9+2}[%0gD8k-8dfv|#l*kD_qW!*55`BZT8.Y$NcYKUc,M`/I&j-_OuKOt-wf' );
define( 'LOGGED_IN_SALT',   '/>to(5UNE}(k{uz<NtYj+H*@9ZKJ$3K3KreQ*ex98sMzh7(OJ*v;/GOD(3D]SPFt' );
define( 'NONCE_SALT',       'SFjBEfU!)m!K3o9AB@ ~iWg/R[N+(G r*2@^.=^muk`U$@F(6i6P62hzm%;K;etS' );

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
