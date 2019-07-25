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
define( 'DB_NAME', 'demo1' );

/** MySQL database username */
define( 'DB_USER', 'demo1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'demo1' );

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
define( 'AUTH_KEY',         '{5_a5ci_el9e[7YBKH2}BLzzZd~Wfcf<q8CE4h_6ZMpfhYL{|Y5Hfa}=36]uyH9,' );
define( 'SECURE_AUTH_KEY',  'Mz[61G P!4uSOyFrgxG_4LDM!!(=H7#Rx<v<N?l$X=:J#SY_M5Fp`iK]_*Azme,l' );
define( 'LOGGED_IN_KEY',    'H+:{kI_[}F_{:<T>G9fQt|3Hz$A*}X7N:@]aKyx#@5OGXHs%JI j_x`s6td;kZPf' );
define( 'NONCE_KEY',        '6U:YjoLi?ufD@3g]y1$ogY$r`YVw.q$DUb#SRiuZA@MNxdP],uogWi;1s7R!=aSY' );
define( 'AUTH_SALT',        '>.-?B.O|bCfEU(xMCa`SOUbH4srd6Xv#]q0Ktb2)GSsPiQz8x+,>pi;[?Q.gL~Z ' );
define( 'SECURE_AUTH_SALT', '{sobbJ$G,rim%.k`ZiH+WHV;yNEwdV8Ghqq(D_y)hm p0vDU;Gl.l{O6;S.| jT`' );
define( 'LOGGED_IN_SALT',   'hT4$C-WwL0rhFFzw8~9~k)F1bR.N?g!bjn6SmL=<M*u(>c<Y=#k(wW4FClFx~:7>' );
define( 'NONCE_SALT',       'I&N<kJ:<<ClvLGs>=<J#LkJJ($7T@<`:t43TN:[@0497LF~cL{):X[zaeDz6)35^' );

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
