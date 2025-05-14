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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'U)s=>FqEuAqbdQRuG;e~q&pU*.&qLM_^QUJgz>V&3:l10JU)/c!SHDAVG, ^hHb#' );
define( 'SECURE_AUTH_KEY',   '6Qd63y/Rn=9 4dnF>ZSX(RU9G.lk<AEy1WY0.aG5EL?Za)cFx9g/Ms=%h*}(H=#=' );
define( 'LOGGED_IN_KEY',     'I|v4hv!#![pHD#6cvr&[Z_]kRFvS$Lmx<upKR47Tb?1<zOO4:SQ_]0bJZ76*&>pk' );
define( 'NONCE_KEY',         'w5<m!Ld,e2?`0L9)K[$g@9|~k*.jL1S>;8z>z#;wBM_Qv(@`0z[ .j|lJOUk^)zY' );
define( 'AUTH_SALT',         'h,JF` D)IaNU~ IGsf8;:E^HrJNblAj_3M+xbV$z,WvqQP1kt.{vSGjVk/!()hf.' );
define( 'SECURE_AUTH_SALT',  'EO!_m$VJk,`>R!xKh?ho:7E3L}(CN82=^oYoUqhDQ^pXf@>.h?:n)P57$^!?eHwc' );
define( 'LOGGED_IN_SALT',    'Y4|FW%Blp544TCj/jz-$6mEAp((&686YAjzo^a<Z9H;@cqm4GS6`:M/SPrVL)3DU' );
define( 'NONCE_SALT',        '8F]S4p7,4Xg?$$)oY{&y*G..uB-^{TVkaXKLXiQlXk>sVL=fPIq_:(.+i7fN3Czs' );
define( 'WP_CACHE_KEY_SALT', 'HR+KfG`]tDy#`z5tg%sSh;B+xD7(bmU+t6/@.jF9;=eKg6u73^J=P;{_y.C;0j D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
