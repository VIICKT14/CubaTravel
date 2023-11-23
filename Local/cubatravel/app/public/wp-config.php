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
define( 'AUTH_KEY',          'wVU3<l4RVl2Ro#x4GDUn x7O2fT9JXf|RZgbDQV;A8^JW.tnFM: LEG.c!fhovg@' );
define( 'SECURE_AUTH_KEY',   '0MnBnoBg0/N~rF>s}CkEzyz#QD)]QW$~KJ S=n5;L!w8W@OEl2US?H@L6diOY#/h' );
define( 'LOGGED_IN_KEY',     'G>)/iz<vkAk4=}|~7x]44h_Cq-h<OlA~PNT+l_Jq.TW1EI`C]i{x%JVr:Hp=1+4T' );
define( 'NONCE_KEY',         '{bn&+feBFA_A9fDGyX!J[g|+{]f)%hceeUAXL(fii!hkDJnN}LKB#h&g+~_%mj^F' );
define( 'AUTH_SALT',         'uwY3T/N*|s!Mh =YT,W%52BG[N$4a%HF*emx}DHYFslc1F2mn`G,.NCX8Fa>/u=Q' );
define( 'SECURE_AUTH_SALT',  'y,A5%a{=L6@*nC:[/}Qv|yb+MX=lsY%3k`<^%ezHk]lLu,U1 nS9(DZ,+P)-,G>?' );
define( 'LOGGED_IN_SALT',    '$vr(@MZ!i16wC)T9Y-@EVU]sta$db1] RAUx>kzM+&B,@.i_~M}@#M6leQx6$Cz|' );
define( 'NONCE_SALT',        'I}|p:yGq?caTr$ncd#CL{i:`7i58#YG?3 v70.Rm~?|/?K[U@qO+=_vo1n}P-;|r' );
define( 'WP_CACHE_KEY_SALT', ':gr}bB8=.^@XnpuNQ?R9JNl|$6*;4~fIl,eY)oOFo_-<5}vS% W{1V5%jf9L;gKR' );


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
