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
if(strstr($_SERVER['SERVER_NAME'], "localhost")){
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'wp_db' );
	
	/** MySQL database username */
	define( 'DB_USER', 'root' );
	
	/** MySQL database password */
	define( 'DB_PASSWORD', '' );
	
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
	
}else{
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'id16626647_immigrationdb' );
	
	/** MySQL database username */
	define( 'DB_USER', 'id16626647_codified' );
	
	/** MySQL database password */
	define( 'DB_PASSWORD', 'Duz!@EM@82825#' );
	
	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         '/kbF_aU}H3RLioN8G8I.8f$ejXy_H>hubiXzHui]Z=s-{X=&X^J7jp]38T]A1,p{' );
define( 'SECURE_AUTH_KEY',  '^x8fxjuN{x+cE.sJ@6qm(9PRkD|&Nq +8]/&zNlywuCUPw|83P<ayc+;qi_5=qE]' );
define( 'LOGGED_IN_KEY',    't7</J4GBq(_kSej|X8_e&FMS}MR`SN+(shx0q,z$;.vrw(5X4z ;v_XGj[s7PA!;' );
define( 'NONCE_KEY',        '~0hvW)SH>UR>P5Qd)awZg]a$VN,z9}l93KnR&8OUh;Q8n4s9t^^ec9yg=^Vjb0w3' );
define( 'AUTH_SALT',        'lFQQ<T#n=@hP]nV$aCl4pA2;s3EZj$c`9dagke+3Fr9]3ZS*[p^[oV?+@~}p!MK!' );
define( 'SECURE_AUTH_SALT', 'k )v*l+DFP})F=rA+8KX# gEg>*uUg>pFJM+eu^FVMr7_F{t_eg:g1iU^4mZYJ*h' );
define( 'LOGGED_IN_SALT',   '6u~dcjg*4S8*GP,$KNT_[AfN2]UlBrF,%})v[498-HrS9GCn9qo,ycN!>2>wO{KK' );
define( 'NONCE_SALT',       'jbak;uWH;kt*iw3?X4db7,`u<{_ueYdyc.D&q;%.7#BrtU$Ro;yMW d6oG:mix_D' );

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
