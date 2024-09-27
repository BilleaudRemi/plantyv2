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
define( 'AUTH_KEY',          'CvO[88kOez=6+W*-Fi.pTWxNR4R3Yke:K cK[cdy<kBd0XTuM;q<Ghyj(sNBhwSA' );
define( 'SECURE_AUTH_KEY',   'pGK}Lik.ye|j@lcr1h)qJ!iHQ4AdGgr<eE/RLpLK1SBe]oAOo[/SM[n;2%iY}E4+' );
define( 'LOGGED_IN_KEY',     '[Ng>5eqbvS?V afisdf7)7ysnL;XS(,*h(.P$T:DKSOxk;y7Gmt2oOn@u6XajmV1' );
define( 'NONCE_KEY',         'AKs8!LJ9+V#!BD.NiF>5x*XeRiqF*?6aZv3F?=:Ubmjo{t$AW8o}O7/(wZw#aA9r' );
define( 'AUTH_SALT',         'Q]AZJ9;LeRqV]|B$=NkOVQ|:LIEjMBMX)Fq&wsSx.QQzGg>`)%DJ^HW:=x`{{RD2' );
define( 'SECURE_AUTH_SALT',  'JaYqQ1vkEH|)2*z:gf6IBhph![LzJ=5D^STnMuWT|qc{ai^;!Q3[EL7~hOe[83_C' );
define( 'LOGGED_IN_SALT',    'Ty]=BZ)/2_X5K%l/%SMZB|8$O*{P^B}_2S;B)7EGb(ojKQox:q!/-2_Ge>{Fn9;N' );
define( 'NONCE_SALT',        'G#I(,ngBur>-YO8~}q`K^Vw([[z.p?6Vc><+2`xddzQB.sQxqq eTn#^2<imw%Xy' );
define( 'WP_CACHE_KEY_SALT', '.,|bg)m~5u.W sQ}TZZCO7>6oqrAiF:(Eood8CrJDF[&,zR[54|v%~hxOHmAMU_J' );


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
