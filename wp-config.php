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
define( 'DB_NAME', 'db_arta' );

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
define( 'AUTH_KEY',         'rZ|v7dnjQ% GNo|F`Ccjk(s+4xT}(D{LZ+sZ6BtI$Ej25{%^?sPxiH6Llj&g5k G' );
define( 'SECURE_AUTH_KEY',  'O8NDG.YT4T$R-yqZ$YA[_9Xh`p!C:BEap|[V4Ktp<%d+dQK=2kD#D|N/n]KR}^Qe' );
define( 'LOGGED_IN_KEY',    'o*m/:E$$Ojlvg}x8%!T#%MuG4Qnx!>Y5QO4%@D;7$rP2vkF%i:w(~SfEeIRpc!Si' );
define( 'NONCE_KEY',        ',T_-hE-I[8)Syh9T[~GNs{Y.m|C#bUW<>b_ooRZCX2g<T;sT>9dY.!D#6mXWIDx4' );
define( 'AUTH_SALT',        'Pm] !WzVW8zNjQjrwkqKo0o[( q.V<PpeZQ+>~@C%]&C:5.(#F~fMq6m@!:6Aw1p' );
define( 'SECURE_AUTH_SALT', '^QUZfi7OH?l:uk?Z RR?^(T@!:uVtN&[znL:-[N`s?[[X<wnW8UWW%zr2-q&.2^X' );
define( 'LOGGED_IN_SALT',   'Ihp2zY!0p3d<AuA,%Mz$eqOKx8-X.F?V5D&ra__g33i!Zdngk$pQS|oe=3Dfxr#,' );
define( 'NONCE_SALT',       'SeLY/LLrjT_w6+F#G_Gkk,6M?)FH@^NL?7<j<FBb$GQwEVyas7SVFmM <-9q4A,*' );

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
