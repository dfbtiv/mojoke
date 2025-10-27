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
define( 'DB_NAME', 'mojokedbfix' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'DWI@9292' );

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
define( 'AUTH_KEY',         'Cv0x:ET~$.g4s^sw,7wY(tqjnU56yhL%:p0Zh(YpT_5)PM]CZz)1y}W-G]vK4fni' );
define( 'SECURE_AUTH_KEY',  'jf^(dnDpiRK|T%~KL=o4+@}v-^6A8eSez=:;GI|aA%~c=Y8no*,+dFBU_/<I;o=A' );
define( 'LOGGED_IN_KEY',    'S%pN!!i:E&5~tD>.@]#_vOb[v(q/Ob/QWQnQ^(%cVlN^c @f@+x}T;%D9|0;dv:T' );
define( 'NONCE_KEY',        '$~r{x%BG.ha*mJJ>%?74oS/:hlw>9:-][T7Uf 2QDcO:rkZX-BfcR8Afc*(I}wak' );
define( 'AUTH_SALT',        'm.T^+(@t{Yz7voigIKIc[gviL~-YR[SR~?m9~-r@|cyD(ANWuUMcFC6gSze9{xzn' );
define( 'SECURE_AUTH_SALT', '&y&gEA=il6H_Zie#{g[aAfL|S#S?}RsP41CNv{$|CSh/40a7<xEDi}FPnhV02u3B' );
define( 'LOGGED_IN_SALT',   '%G|!%s(8$HOyi4e8hr@=&GYk$qg@P09L9V,f.m4-J;70F7J/}jTd el`{%eEB@Ip' );
define( 'NONCE_SALT',       '=S{(zj]}=c.BWiF,7!R~+fweW+a^kJxO}T1FC#]RxM}Kgyf-Id.B#drJU| X,dJA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
