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
define( 'DB_NAME', 'satnghethuat' );

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
define( 'AUTH_KEY',         'z{_`=P6T6Tv4;v}Cb| :GCyR8hw{Ev5yNa:q`B@pgTBa4s`gQ Io8QdeN7FrQ`:%' );
define( 'SECURE_AUTH_KEY',  '5Y2! {f5tMWg c?[{}[5^JNlrK_eHB-|ILlNN$D?rl7Z%z#r?F@]vghg i^?N+Xm' );
define( 'LOGGED_IN_KEY',    '$I}JiR`;r!/3<]`<DB+&u,oe1:>/OdU.v/Zd#wxW)H=mO8W!=$V;UmO=]+At7XrR' );
define( 'NONCE_KEY',        '}fx:5>=B4.cM,YN^~]UU!`~4k&F^.j2]N7OyLTrsG18Tr:P]{n36OC5D2Go%lln|' );
define( 'AUTH_SALT',        '#;Y .r#VxHw`$[*9ZCRk0UB5<=w3zf<7Hka;/j~&)kLs^+R_y$]@s,_0H_zL*zFd' );
define( 'SECURE_AUTH_SALT', '3ZR?OOsY5mH=K[a$Bl/0;ims6Ak-IU&lFk2e:<_PcQU:]]$$1T%A>D&qo!sH+^8i' );
define( 'LOGGED_IN_SALT',   'D9jPg:+<73IVp&6olSBtYbb^0X*5@PeM:JgLd{@Kqc-R)}#Gu!nM4l!}#IZVRr6M' );
define( 'NONCE_SALT',       'pc(-)ie<k>u+g5 9[!jw%RjdW^JCgwK]PB26V&3|#~r YCvD)77kB=H=6/8kDLHC' );

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
