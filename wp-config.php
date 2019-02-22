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
define( 'DB_NAME', 'heroku_8f0bf4b1c98b0b2' );

/** MySQL database username */
define( 'DB_USER', 'bbdef86d7cd28d' );

/** MySQL database password */
define( 'DB_PASSWORD', '40833a6a' );

/** MySQL hostname */
define( 'DB_HOST', 'eu-cdbr-west-02.cleardb.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|. !/h0qy){9Q|6x%0v[he@|)y]r!^dY`Ss%:OYhz?=Du]n~~,ipI:y!JU@+N+|l');
define('SECURE_AUTH_KEY',  'GrmB_D?Bl+/^48SzH+6b8-!uW:}#YOJ-!&m5/~wh<--PPFA5ud.H.+kM2Qb}Y`3W');
define('LOGGED_IN_KEY',    'k~Oq+G.Frs|{:h&gp(F[jp+>##t,i^vQ7Z }.v4`/?Kai:`>XDW6i4z#.ye`hD5[');
define('NONCE_KEY',        'A:[_aw!v}T-|[FH+?`wof>ugUN-JF/J{O~|D>s0;34:E@zV0p2)X7r(m~9w1qC4|');
define('AUTH_SALT',        ']$dr*<<9r.f}||%$)G~P%bb6i!).JS*NFq+j#./gWDF?H8pEVJp.=Ltee!vJ3K(>');
define('SECURE_AUTH_SALT', 'C-jQ2gevbf+1X[M~9|{AJz6cst$WK0-QrqEC`dtXDBBI9=jE9O7tM{UN^`r.uzF]');
define('LOGGED_IN_SALT',   'dd0B(N>c+A@6d>}+GITWo-t:K58YGw^iF&Kb?~+sm$:|FQTX D_*W=o|s|b[FE$j');
define('NONCE_SALT',       '=3?,[|w_/cpNuLLFndnZ{{J3WD.Legv{+8N*8TK}31_Lv6#<T)$;cv$V9YQ~-G{O');

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
