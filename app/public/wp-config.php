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
define( 'AUTH_KEY',          'X6r$b!v5Nd#QL30vosH$-~QI|3el~Slmh|-hhGx],Jmd^M&0o9[J)B{[^ZEJ}FN9' );
define( 'SECURE_AUTH_KEY',   'NZq9%}wALvXVD @ZE}::%mrn^Sj->qz%C4bHk`4y[qJ;;;Uo9T}V(D1.e2)GS}W*' );
define( 'LOGGED_IN_KEY',     'ctxngutC+Hf{AnbS9!<qi=c|y1{fVBatCifw+/62bZ9v3(t`fRQ%~QSs[vWt%B`v' );
define( 'NONCE_KEY',         'c:-B_m<IB:tFc~adB6F|iGZuH7xXbp7&$8P<ulRJW3KiRVi<+;xx;^)2DEW8z)r%' );
define( 'AUTH_SALT',         '0]z#gdH5jKlU${#uZ*EFkdK4+Y&#d:>a%;?}{rJR,^;Glwc=K#c6}|=OOq`qvQCX' );
define( 'SECURE_AUTH_SALT',  '>H13A~:>(H>2/B8cN=Cu3%4H<Kc/tO=3==Os=d0=N^f}s[F&]`i?OoB-lI#Hmg[^' );
define( 'LOGGED_IN_SALT',    'fdn&;{3E)Mrq>6^ska}[V0KxN/<lq4KVH%[tD6z;n&9fVvi^,Z`U>#*i#J@*~Dfl' );
define( 'NONCE_SALT',        'FfB9uxem?*]v%FGm6<xlGYA8Sa c%J9NG49w9T+^<Y@&GV$9<GB_Zea{gNSwo#&~' );
define( 'WP_CACHE_KEY_SALT', 'Q.ifNlD WC!7x1,eS9o6[b9D+.Cj_l,RB:SFL}$DmGX#/KsQ?B8 ZnBC3{_eZLaR' );


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
