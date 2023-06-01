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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Cz$Q>/a^98+?@i$98HR!pdZc 9mA-V4h@8h&)3BV]]=oy8E=_i^nIJx/NOeOH*@K' );
define( 'SECURE_AUTH_KEY',  '*ovIsBf3U_ukt2Q1,dWM59;QBdC!}SU0yi=x5 q9t4M=5fM<iYS2GIRjKwz,x1?a' );
define( 'LOGGED_IN_KEY',    'm,;Ae1V 3:heh3vNKXDdZ<X<@m6s3y!l]61<lhpbyIy&]}zfX1m~6Zje&OCJ++Ut' );
define( 'NONCE_KEY',        '?n,?krZU@C*Vb3%9*S<Z$o9ReDDwu4N|q`iBS?P@ysds>MjmiA)C_A/h;QBAF4N]' );
define( 'AUTH_SALT',        '|vwH@1I?_VWi+Q0BH^{SM*e+,YW(-7ddhH+%adwLvO.g9CL^c0L11H(@Up2ft<`R' );
define( 'SECURE_AUTH_SALT', '#Y8sS8keHR1#NbJp<B;k;C?!{qe4S:3S-7A5Z]sJIE??`]SoGrlI;jDv}D_|XhS!' );
define( 'LOGGED_IN_SALT',   '?XBSIOJUnp#h=Ms3DFJc9N<ib ]fri`#R$0j_=><Ef*,qBk9mIQYxo3gW<p3iJon' );
define( 'NONCE_SALT',       'rIxs-J)6NDvaO*+cf1GO=4.6k$X*!22I-@>bXjz_(#7K_H60kdDr4}xR^p|8/Dra' );

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
