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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         '+Y(T*h`]u7*z}=RAVQLR<VIPmj>`GV((yw5GBATL+e:-g<.v_$8zIg7DDw01pjy4' );
define( 'SECURE_AUTH_KEY',  '4k%gLL&abb{1x]FPbZyq:nG4dPXi|Lw3! >B?LMyHkLTeDe4a]V$-,I0M@6@^d?F' );
define( 'LOGGED_IN_KEY',    '+P8H6]a+DAWG(o}|)tLH0-pglfPkfD:OS$1OD|vmZ.XB*:=h.VrLt-Ni#)`xS{i<' );
define( 'NONCE_KEY',        ';}CA6p_0:0qYlZz?yg[%*f;ga,)v/fPx%qr`+g$]~bven2T$@zeV2_Q0ZW c?f0$' );
define( 'AUTH_SALT',        'TiN&vgM%fw8VU9#y|.}t4Z`^~?hK?D!0&yfA:!%8A2b3ip|DIpjje [w#B03f.%u' );
define( 'SECURE_AUTH_SALT', '5Y@qwfA2NmSX86A&,jQ~r.d2dFAR&KPx.ZJaSjIS1nx_4+WTu<w+)myE!hPn^Vhi' );
define( 'LOGGED_IN_SALT',   'K!q!dLf](w;us0 Y^M-i5n)(cl7* 1Dq<+zjBgYJ=9(tKau-4K5T%Q3_ILrwF_*=' );
define( 'NONCE_SALT',       '{QVU7^m}JhF<JM]j+Nlk|M!3YOTDRr;Fd@*09t4J6MEI|cBA.)5R+m/%WnMv~z]s' );

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
