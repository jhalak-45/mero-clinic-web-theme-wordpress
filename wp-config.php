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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// define('WP_DEBUG', true);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mero_clinic' );

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
define( 'AUTH_KEY',         '4tK[nttyS-N[.1wFlP*jMK?yr_##EN:@LZ],aR*KvW]DkB$eERv-Le{=jWMbmf8}' );
define( 'SECURE_AUTH_KEY',  '7Sf`lBN-nxeb&q7KXbNZlPNG)c}oe&M1w+GrYjpFyG7PLaYZ:htkGp>dUUDF)!?4' );
define( 'LOGGED_IN_KEY',    'VI<NL.:ZEE!WK44PI?ZvVRwOW#2=9{6yLJ8r6njQ,!,5i`)Jc8+ n# cIgvCgH>H' );
define( 'NONCE_KEY',        '4qw&%RQ#&ThajM}+qug6R23&rDp;xfe[0UM>D$R[[Qh:)F`k~?O.P*3s?sv]^*X$' );
define( 'AUTH_SALT',        '!ZSKZwybE`UC[f`u+)G:1?/iI:#mRd*LV4@ss pk}PjWXEKrI##Prcb<K[|d{k2l' );
define( 'SECURE_AUTH_SALT', 'm*4Pp_$8=*QYTfRKD ~smu%0:7Wh+MgZDy|~3nr5903 ,kkMv^gg#T?)RrE0#;3}' );
define( 'LOGGED_IN_SALT',   ';%[(RACmpAiym;Z5*1%WJZB]?4Q@:VkgFbH8M-lPrvWX86j6SAj__^j1jJ&h+h0$' );
define( 'NONCE_SALT',       '^ms`+-0Nn.9PmEVPIk`:OG|-2f%I~?CJ-){)0Jjn4>0ddbRKB;}7j(S@hn!e *~;' );

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
