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
define( 'AUTH_KEY',          'b,-  ;mS!sy6a2q=ahw2{,$G;:($R(N:CiZG}i7qI=s,-q|@euXBH@Twj#`FVDLX' );
define( 'SECURE_AUTH_KEY',   '*ImP/K^ACtW4[>,Nn[Y_n%?*nf@[1l!%DA1g8E;Jb0^u)%T#Emu]n+;{f%Mvq|!N' );
define( 'LOGGED_IN_KEY',     'UUQrO1L{L)QAXH9p[TAcQW_;Q@YWmpp,&xt~7a3PX4daQ|YJ$UP~#~upT.~1$x87' );
define( 'NONCE_KEY',         '37ey,4}2qO:q,eOtXG0}wxPQ8CJ#$@}v4*-f?3=^,N~UBcIG!Mj,$5.F<>*R`reX' );
define( 'AUTH_SALT',         'ZaI3H@OxP:+E!$%QOD5@&2Fi>#Mg=ORo=mDiPS{hrx/6m&=p+06X.gMqvv**YJ.7' );
define( 'SECURE_AUTH_SALT',  '^q>(uijYwZ3g}A5ji|lzf[jM~6*mN9fOMHT3NzF<CIt[?BnDtR$SQTht5yL}/}ke' );
define( 'LOGGED_IN_SALT',    'J]Umqar|HU( ?_@j]_K*Tw_%caPXQ^0U.D7LeAZ]J}3regrvVGEOE(1dd~lO~UIm' );
define( 'NONCE_SALT',        '<z_r+PV:[HAAH&jdg53I:IU6r$.j]O`H=pUbHv@,/0j@4+9:ngwyN|}mT676C8@+' );
define( 'WP_CACHE_KEY_SALT', 'Mk]pn:%4;=FWgj$FW@c]Y:>iFbNnUDY8`Dr`^`mN=K3xX;@XpDskSi$pP7s)!&BB' );


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
