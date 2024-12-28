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
define( 'AUTH_KEY',          '38x1%{qunNLN(.tHR|UgekeY@@zqc{z7`cG &GHi8`bcO rIPo>*G&3Byr01O@gx' );
define( 'SECURE_AUTH_KEY',   '6ZmD0Vx5(|UV!<wZ3hon}K]4vSkj]9S?]5V$MQ%n47gf|D*i/Pl<aqvF[CECTp^H' );
define( 'LOGGED_IN_KEY',     '|Wtr8Pw%n8P++QE;D#+b{hNgMVrqyFf^Q_~swRLO>9gP#r&<P^]%aq=3qN)04p4}' );
define( 'NONCE_KEY',         'qVvDr>]FE<U4iR7er}8@O>*$fnXg7Zb yH%Riu9Jl n}r/|?nv_3Q7F_2_|K`lxu' );
define( 'AUTH_SALT',         ';epYMm12]O}2DAfN(d`M/T5>7*hrwfVV}.c>2/}y9x%r_0!8YJ>dh;{*&,*IUfpQ' );
define( 'SECURE_AUTH_SALT',  'e*Zq]=0n|nWpaA!@.Q{h47&wAxjmG,)A&Z;YNn7SXyOWHs=*;YzUWlrqg&i}AbOm' );
define( 'LOGGED_IN_SALT',    'SZueD&:L(&l,Tj7b:Wc_%cBj*1`->grN<Z)ip?7IP/aX=K~-*!<%SB,;TA(9y$~5' );
define( 'NONCE_SALT',        '.T^KVB6/x+QExp@ eW% k#_8F%PjYu)z%WXw`RvM m+o]{4-%yrfHjl<N{qPN%#2' );
define( 'WP_CACHE_KEY_SALT', 'EH)9]G:,0[@FD:;1C==Q[a:F%[V~R%_06_2z%v2 ;<@YxYO08o7HU@!QAfy@lu{*' );


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
