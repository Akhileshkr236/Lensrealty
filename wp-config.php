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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lensrealty_db' );

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
define( 'AUTH_KEY',         '>O{1#SbrLdH)H,V)b1(n.zXq-AzT^qT),wv>i_`_[z+l/ dJ~ Ki}Wf:S2: c_0$' );
define( 'SECURE_AUTH_KEY',  's<c[u@:BN+@bq$aw:>W3)(,AG>`.%m:K.KI^ O[/Ap- $Z=~#jT+>@%CE*R.7|E^' );
define( 'LOGGED_IN_KEY',    'rO~)9vo2 x68ugv6Yp/TdMB`-E+Q_ejKb~(vkdv8{7]tEA5uM 8>f#|%5$Dym)(y' );
define( 'NONCE_KEY',        'Hpy9%!m;^RO |]vB2j$8[}X~`>uPJQ9w_-W#dpHDN[QX*U&ob2|Mp?FN]>F|?i~d' );
define( 'AUTH_SALT',        '.X&u)+%6X i2GD9m78NWwdL) r`%onx~EfniV0|F9WDIGAnttw1m439(!B%s_PG-' );
define( 'SECURE_AUTH_SALT', 'QRDv^h.,Q( 1YFW<j_dyI!fC)vqKyS5YF(!c(;!1:EL}R`_2FAP<naes&&N6Ou)Z' );
define( 'LOGGED_IN_SALT',   '(^.v^HONn]Rp%=%yuqm;=WrQ:iDdvaN@a[fWoe`kwh:Q)7!n5+scRJGEZg6pO|I,' );
define( 'NONCE_SALT',       '5S!9!S$!yB5nAk!;fU9xQno@z}#oLID3LSo_v1r38zmNF?5{](k;nBy~Zb~M1qk#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
