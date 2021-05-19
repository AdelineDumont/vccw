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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '_?hZ5&>yjDA2Ntp#+JO/okoHp0bY]XD.%qN*{mm2ph0CdtiV:OR3_L:5czC+[,dI' );
define( 'SECURE_AUTH_KEY',  '0k:mBc1O39Y~vU7L.XwtzRcC 93951d/a9PiuzU;uWXUX*YN~^bY[~94:Ns>TZe_' );
define( 'LOGGED_IN_KEY',    'GR<B=T <try=&O1([k7y{y<DO}>/Fsa`q:+7Y`P2/,%Z7iztDbA1;y^,J.cG!#QI' );
define( 'NONCE_KEY',        'uV:nN!#_1)Wf)]V#M{c<tI)tIj1Yu?bL=KN*@.XA7O]#c?xlotVSYSNKb{0{,&.d' );
define( 'AUTH_SALT',        'a=0zB{;.b{&QR$2+V/N,tVOPykDr2]7<#?%5Dpp*qE >$[)U[}A,a^wE$`mkgSf5' );
define( 'SECURE_AUTH_SALT', 'fDU&!VF5.etH)Y>{XT uL{/UaTi{%KC}z,TKWV/_2!f&f)8TR;O.tby=y&q2>Q=<' );
define( 'LOGGED_IN_SALT',   '}A77[EsSb=dh$0Vx>=e8)7>}FD7+RN-[pNeEn|?+<|S0bRz~]_=o%N0lwU+aaB1Y' );
define( 'NONCE_SALT',       '[Jbr0F+&<Y,&q<4EJ8HU%r=^#g.DLU~xT}A/R}A429_5PW `F{0s?+@*VAWN7xCo' );

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
