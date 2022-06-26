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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '$u96m:FC7LNlq9>;VTn-Zd[1@tZ<&-1xH7E_5`ARG}xN*s?Y*:2+tShwayUsE^#X' );
define( 'SECURE_AUTH_KEY',  'VWEh6O+aT`.$@L*0cu-L>xhiL@wC]h0[}XISpZ@FEd7NBe`H`FW1nDfNh:lmnyf4' );
define( 'LOGGED_IN_KEY',    'v:97SPR#w*S7} :i_&G{C6j/|+%Q_^_r38AqQuM>yGq?F;~E+eh2ShhnH,`+ yAy' );
define( 'NONCE_KEY',        'EXF8PpM=q>oUK.)h@l-=ijCN7MugT}Ux06JAGJP4C1X.`xgCl2}rKUVnr#C1YQ&:' );
define( 'AUTH_SALT',        'H.AzCd^3QlKGc3K}d(]Xi^L O)ug.bltdr6@dsf/8s1JkmQ59b:J5#:^?#ay?pbZ' );
define( 'SECURE_AUTH_SALT', '%wQM,Co4O;h {}g^u9U#Pxhg}iPG/.s5D6/6jSsesB6MT[/@.TSs9)m}Z8qqN$A6' );
define( 'LOGGED_IN_SALT',   'fZxzbOS#BFaz:lQOLQ{#?kb-uw8Eg<tboK/5c.io@5P4$IsDoepVE7PLog_NLxx6' );
define( 'NONCE_SALT',       'U-`+zW)8aeQ!of-q-_;jUy(Xp?NH&WZZVYg,-0)]yR^Lf_+2Xx&CnBNo%FaoLF4i' );

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
