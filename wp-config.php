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
define( 'DB_NAME', 'vmarcasioti' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'AVS4|TO%Cn+<^&{U4!g@rx<@<,/[LhJIf{*;HU4p`zGW!){wo<>k3BGfLpXVxp$D' );
define( 'SECURE_AUTH_KEY',  'i&jAXy3}|.sF1c`A|{G8ioMiOf}eEOC<ICngI@v>`=!I~;[7m=(kzMo+|9b-k_#{' );
define( 'LOGGED_IN_KEY',    '$e6rThThe3(Jg/$.I}Xz+j)]E(5F(-&*>52y0k69UxOH}A/F.3+OWKRbyQ8O5LT8' );
define( 'NONCE_KEY',        'W,-._?86vyDVXkKnn>aNVhx,Z-($Ilq*0,#?=z.)SO-S.?jZj+!L>* 1O%XB6&h|' );
define( 'AUTH_SALT',        '/I=*7}LNV_QK/>@AaFC8Vd&7}D6PzGHa1,Iz2Zlc2M16M?Fu`QmlnFG=rygLD[)6' );
define( 'SECURE_AUTH_SALT', 'p|p^JSz`?&OVfQm(O*8Aj>wQ6+ij5@^-Hp0,Oi(TBJi,Oe =!Qz{d/OllID@QCfT' );
define( 'LOGGED_IN_SALT',   'OCjKe[5K0O@ApTQ3khA5qk#%kBIghQ4.^!@!v*m^P,[P!xwV:H/^I]KTfWf]Fu%-' );
define( 'NONCE_SALT',       '.}A!73E[T!e TT[yQeV NOtMI_s=.}QXmGVoEq#DktLW;rfZwsNrvS7hjh4nS/b#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
