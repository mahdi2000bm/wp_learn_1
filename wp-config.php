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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_learn_1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>ze)}+d!w0hjzwnLv#YR?_}4iM,SCFc~cr])CI}.M ZE*Q,|B+}&u2oHG<&52G*I' );
define( 'SECURE_AUTH_KEY',  'KO8PckJC2TyJ9y^nKvT3+f{W>@dBQK(~FC]}8$PyMlLer}>AOI. GZN^*G:0 Si$' );
define( 'LOGGED_IN_KEY',    'iCS}Q=)@{:C=oF&huG8`02}UQ_0)_f!b0Yi)Rf96dq//a91M~yz8c|4XFN[-%_wO' );
define( 'NONCE_KEY',        'im=w[|uh&.KSb.,0B81s*v1kSRxm(ak-i_.VO<h^,(_+6eE7?/RB3a]vObJe?9or' );
define( 'AUTH_SALT',        '%D[N1$/;72fte1fn@pzr(r]]e/(e<WR-|YHmZYTa9SA_vV`Fz A`q_My( S|GKfq' );
define( 'SECURE_AUTH_SALT', 'rJ2Ks_d9ybVZpu-E*Vvufr<6)@rz2/RmRr*mYg.:N89D^~a~ah`nd0S~p~S7:PSF' );
define( 'LOGGED_IN_SALT',   'l*PH$50+ud/8m2]<.pJpcjn%iIS)jZ6Cy8m;FVyg|uO:K<VBhmF@G{?E=I%OTI1%' );
define( 'NONCE_SALT',       '5[:YL-^T8xf2t&pWm8pJc}cn+O2/LCY<e)Xat5}](EALCr]LZ[|5Zhv+O*-/Y+>8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pw_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
