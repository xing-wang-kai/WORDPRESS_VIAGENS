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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'viagens' );

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
define( 'AUTH_KEY',         'rl^X&/qwI7d9KL?H!BTv,%Ige.X`#}DlQwt<GEN(|nVh9&?+{f 2d.cu_6ZRu*K]' );
define( 'SECURE_AUTH_KEY',  '0mRx.vLkG BKW1/hHH%rHe/OdV>%>>;`frHgjZ !h|E@J]HSL6s`IldMJ8-mf-e2' );
define( 'LOGGED_IN_KEY',    'D{K4E%^1xv^f`hJAT~;eAHPjjZwj7*VU4:!=|C(2(p!u~NX/De]~|+#Lp&WK_PB2' );
define( 'NONCE_KEY',        ',]8m4y?est@vIg_%mbOfOMQ)CCy2>>N(w*ony?(meVDO9%1QL%@$6)5Z0u`&sYK9' );
define( 'AUTH_SALT',        'hbB5p@DmKH1p7b^jn=UxX,0noHD_{{@=O9z-$dN$6<0laalRLyN3!clUR?f4-]th' );
define( 'SECURE_AUTH_SALT', '$v~l-&-F@4u0y-i +u%=Z*3[?JAz^@?^eoTr!M$-(cf3z^Q#7Hl45k4c3NUL8beK' );
define( 'LOGGED_IN_SALT',   '*-)M[eZUVH07?nMYUI!>{=:S=i|chrVGZA[FC,ivT[^=#zPUrCX`3)?^BJ1Jr$t%' );
define( 'NONCE_SALT',       '`,]xUNR, mANxE(I6ZR-ztq,4? %U%b(=z>_mduRt5BEg9=ZE0|@SKoS9X`5K<oq' );

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
