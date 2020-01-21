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
define( 'DB_NAME', 'quiz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'CwZoK5~/L0.*PPTOE-Z+Y^F7(Q$])cFW)owarw<lb{p3yY&y;j;jb9#(OT6T9;!u' );
define( 'SECURE_AUTH_KEY',  '`1)%^&k^C`U$,F3PZ]kRGz!Oh}.`oxtRQ{2,Mv}WO},gI{}FOyEFPS5`d`j5W0=W' );
define( 'LOGGED_IN_KEY',    'T4E>0X,MPrBq+o9)FnBH~cI(XuYQhwRM4rgHCi+<e2$NpyIyPff-Q|c/A;|d(6pv' );
define( 'NONCE_KEY',        ']-[%t7KByq~Wj_ry;r>i6:![9,)v1wW|Y&OOdM{[YK_OgPS@7!}}/kOPOk}DaJ+Z' );
define( 'AUTH_SALT',        'h)juqdxe~r(.90P_)c-5KgI:0U=by$6~L%8j@nW9M<Y&0rGf|vC+x1uU;H.6):i:' );
define( 'SECURE_AUTH_SALT', 'ud}P.d-o{rtrL54+0&0;L8Ac$Yby/976Kv>?kMFBBw`<9Cm}H&dsav[?NTs0*tEQ' );
define( 'LOGGED_IN_SALT',   'yrb6li2[gZpTy%ADQh)Jx;{c #ccXDvc3/Af_yKx.iluMmKo4(@!7uybTnH(jPYx' );
define( 'NONCE_SALT',       '*h-.~|{!>-%pb]:WR9*q(*5OxEUg.~iF`S3CDD`Rxld17vxb8VE7t5VrRHVO!o5]' );

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
