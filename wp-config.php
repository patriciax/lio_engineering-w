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
define( 'DB_NAME', 'lio_engineering' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+-rIXp2WOQQWY#~>9pp*R1vlvyykt:s[P1h~*nUWWKw:A$hpM<eRe?u , F}BMwp' );
define( 'SECURE_AUTH_KEY',  'YT=.e#!a pU#vhAk=:D*1Rla^awNQ7lNw:AYGFtw!<?F`fM{P.oGmA >I&A]__Hs' );
define( 'LOGGED_IN_KEY',    '@|4+k..^XNNq;^y^Mi>~?hx:Gb:x;Vo%>5X#T}&aMs8m8_5hRumD&7y9%(r@K3;H' );
define( 'NONCE_KEY',        'OO+JZPQ`A;N08%7>*-JbDl8jp19*e@EN3@a0,A^Z.. e2@)jKReUmy5Td/#mZxR}' );
define( 'AUTH_SALT',        '2{sPp>I!$j YvYe93]z0##>.kM6w]9L2]JNVnS#rVAo4RL,p{:AqJ^A.[Px&9vWU' );
define( 'SECURE_AUTH_SALT', 'mnL7oe#6jbM>s_H/*?-2y!8Py2 s_=TGu%eM+)^KRvU?$fJ,*Ru~Z;~KjcD]Nr&y' );
define( 'LOGGED_IN_SALT',   '_2Lz^z=3|,!o&.$`iPq.~dH!]5yl<kIeeI^3CWhIb$_BNUK-b$y_]Icof4ZY.E_Z' );
define( 'NONCE_SALT',       'Xcz98tl3OS-[R(T= dl]KWdcXV!=]U6]udpAj(6Az/pJV#ta`Kk$g(TMN5}Y@GlT' );

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

