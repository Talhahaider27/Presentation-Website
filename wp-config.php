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
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'ja<.(C+ |7JSjBr5-#<s+{B#mX$R_5!Q^^+b1P?G.F&z}N!5)|CQL9=%QL4Q9goH' );
define( 'SECURE_AUTH_KEY',  '01FH3</PL_)ug_u?mQFR{i8./g-oE8(>fLqibI;q6vZ;6c-/(+VY>l5)!n~aE~?Z' );
define( 'LOGGED_IN_KEY',    'EeMXIIfB2KPtN?U!e>N<=!I7.r{E_6dMb,8-x,)~qUXRud@:R!7{6ZJ[8g+G_jRe' );
define( 'NONCE_KEY',        'iWV|dE%-u:Q7vXCB3>:|;[)OaiL`ltRT6Qzp`BkX5>0#u#}mU5||(mKv/g31]i4R' );
define( 'AUTH_SALT',        'f=4aq[#2,h[46T#%*SWlxzyh,B9#8_,#:Se!!->95AERVjY. Bd}]Hwu)t4mvb-8' );
define( 'SECURE_AUTH_SALT', '*L0PcBzH2bKokD<56<Y|@]1.vXG5T2=?)L(^,Q5M8s^!s<v@i$;G9BeE/WZf`q)#' );
define( 'LOGGED_IN_SALT',   'X/YalY1WK7<uWIvYK5ZuzbZf>N?t&vpQL62OmP?1*ZnAQ.1r-=Qbw$,Ze<N=Ro4[' );
define( 'NONCE_SALT',       '3akM[:CEK~(dMk*9c3v/S`BMxG%wOZ@Spg ac7nP;GWJR_p*v9>2AI%_lnm<JMN@' );

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
