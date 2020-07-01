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
define( 'DB_NAME', 'mjrcreations' );

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
define( 'AUTH_KEY',         '$$Xqk]843ehduIdIrBz;9m`%C5K%dqNmYT=@Hf!%ow>VSuL=5w~DWi -`eq,@J?H' );
define( 'SECURE_AUTH_KEY',  '<{Rjn/-~w]KGiW$eGV6AX-BKsVSvpNs*Z)v^]3Xnr|9}6YRbn&_O-wr_ne~Nn(9&' );
define( 'LOGGED_IN_KEY',    'm#{q/m;/OiJ@qLS8[N*u(Y`(]7b+A^`*L<$,nx3h%T|*y-B|(Dly1-[|Oc4;K7+a' );
define( 'NONCE_KEY',        'j|Fn:48>D4.Mci|=A{i4n#3rh*Mw:@m!q$X$[hb2VBt<jn{3%1tooAsJBe:{COzz' );
define( 'AUTH_SALT',        'WC|kbA2+J$Jv`7+ w7vFw!Dc* eHLC}^N2,v1!gyR!4luVvq40u:Lh.#H zv3H(z' );
define( 'SECURE_AUTH_SALT', 'cGcK~Y4y@KRYb([A:t0G+)<4A1M}Db+@%c5A;k5Nart<U<A[u2,.f?7Ck(0Vl_+(' );
define( 'LOGGED_IN_SALT',   'dQGuBa](tFSU_*a=+bs1+9ZvUr]1fLBKN#4;AOw5]LJ~R2SI=8C}j:^<6u4~x+s ' );
define( 'NONCE_SALT',       'h>_TSS]W:bfnd@!3#<cC_YNI~~J8 826<lY^C]NnM0l~5$$A$kP~$P&vNUmo}{)r' );

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
