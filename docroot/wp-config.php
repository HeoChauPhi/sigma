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
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Gw%8HR)X[VGZ8])4jb[]](SM6,QcF7VfuQ<05H7o)yyjo:;ve{CzA,VB*Wsu]_&8' );
define( 'SECURE_AUTH_KEY',  '|x7me:X#ZpOjAKE$j+(?6oX=u,[*uxK7p5SckV/dg88av9aWxwd:%Zf0-q6KD}Sy' );
define( 'LOGGED_IN_KEY',    ',a#x)ekWi)StefN)$2{yclLtnj=,+NnOg,+Q0a$1~!y5n6`g)cO=4pXL+(T2P~rD' );
define( 'NONCE_KEY',        'ULCa|c>E~nlPP<m>D`93>m{^p{2~Vu#3Fta2?/|su0^*#]lL{|8y_MUZ6=taFgBO' );
define( 'AUTH_SALT',        '|S=T)B)T)J-t#36K-1#G*U5+dOKR aC[7-5X{IUlcPs?cIN+g(3gO~6{{Yrat.SM' );
define( 'SECURE_AUTH_SALT', 'F3m8E6WYd>OL(=uU/10/IJmu{ Jf17{WfqEUK[4E)6^6EZ@PUg[(Y!:~_ac&` l>' );
define( 'LOGGED_IN_SALT',   'IE]5O6a` ws]VDb/Ndg[XLU eI[3IivS/nzUK>=O1g#!Rf3YSul~`>t~^a&`T*^Z' );
define( 'NONCE_SALT',       'M.?34Glxr!,?0[,iI.yS34UtPIFPF7>|; .J3)O8Iq=%>6<Yoa%]NmVgS:,IVzg9' );

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
