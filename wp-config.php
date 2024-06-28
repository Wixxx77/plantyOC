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
define( 'AUTH_KEY',          '.@:ltt<)A8egr8idx5Av(:K1 _j`x$`PkYfG* DP[~UT$%~k1D_b]^TQHwy`nOdi' );
define( 'SECURE_AUTH_KEY',   'LRZb 5s`azwZ/1eD#FtSwv]gAX ^yC0hoxx7w;]xenm rmp|AU4bFezrMtl}M-p?' );
define( 'LOGGED_IN_KEY',     'NhS~yWGag W`Ttr`VDMY|`!5{y3IXTDFsp1651!rP$],,;::u{@Q1EN7fT&/Ro^p' );
define( 'NONCE_KEY',         '2HA$WDv[+8G1kN<BDqh_z_cv|N)#_x_eYvxNETb<gt@_1t+6J0ZKlX*p}pz2.3I+' );
define( 'AUTH_SALT',         'F}1& E8!X-j*=ANQe[aC@%;*fCaQ[bz9 D}.LJ+fAl _wsV4XhM7bv=Jxe6hj,./' );
define( 'SECURE_AUTH_SALT',  'D&G%bSe*-v{^]lEv^g_n>w&9ht8b=hZ,n0ca*F-Ub1e|wa?+&oPiW>^P>iZei6=W' );
define( 'LOGGED_IN_SALT',    ')7a9_Zz%K/05%ffzGZca5<St8b~^[8T9([|1MFW}ZGaV|TqJ*uyF`HWX8T0*-80H' );
define( 'NONCE_SALT',        'R7FBE1$QbQusAn=@Vbo6}}~/v;N?tv=d7ZH_[]N- `7,(,ZI>O$m5yJ[:{76PTfy' );
define( 'WP_CACHE_KEY_SALT', 'm{X&+.v?%wfI;TFWt:t0Ip+SG2X#+&<UpEf!63cewiS1&#S!n+0O_gADwN;oCJ{L' );


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
