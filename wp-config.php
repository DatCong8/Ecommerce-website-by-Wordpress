<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ecommerce_wordpress' );

/** Database username */
define( 'DB_USER', 'ecommerce_wordpress' );

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
define( 'AUTH_KEY',         '>eHV,b68*^~}3EcB8w^Ah+cYu(^fpc[w.ou7h7BPHY2WTiMzvm0vV,-I=N-5lGuw' );
define( 'SECURE_AUTH_KEY',  '% G(*X#_l6gQ}]/Uc;W#k666go-sMT{R0y(VL~+[p<AxY${u`J/_$#<DNBT7V,|g' );
define( 'LOGGED_IN_KEY',    'SepO9!0mRAgu?Xrim7NXi>y>>1Yf-,[c>_A`H%)&-o[iesQ!A*|YBaut:s5fqI3-' );
define( 'NONCE_KEY',        'm]f-K_T3e*$>i.Ry$rw2SY$Ay`:Fsx`F,DpcF;8.M;F4]GfxO6a.]Ls?uBqV47Q&' );
define( 'AUTH_SALT',        'UFhid+WXVZAfJdGi[^=JVp0vGln,slP3_*3/}hqmL+GRv}c&JSr6.&/@-;Vi>wrS' );
define( 'SECURE_AUTH_SALT', '=AC^yD`v$U$H#1M[)qIb}!9gO#hvvcUj!r4M-^JeMoD,x~qN,alXafCwl@@ZxswV' );
define( 'LOGGED_IN_SALT',   '&*m3Jq=-*^~1%Q}4n5*hoxI&:H`wo>Hre4F|2Os`;mFuPtYTD<yy|Cy<;/e:|74-' );
define( 'NONCE_SALT',       'H.i+,GmFZgw`}G~T3r*0tIO!$.-yfo%84|7jbrq+XW`45^Y+:<}@=mTS#y9e@Xa@' );

/**#@-*/

/**
 * WordPress database table prefix.
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
