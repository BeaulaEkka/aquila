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
define( 'AUTH_KEY',          'e&_p&H>=y7@f`w9$2{Z!o;,F1_%>!DtttT.MEYB4`&0wx:6Q~P>ic^N#^i!h9QNa' );
define( 'SECURE_AUTH_KEY',   'yA%i-oyq.T9.6>k<[3c/|E?5k!YB$9v6%R_N[XHnOQ6BkB&=fu=FeIZ-&dt3%Y{7' );
define( 'LOGGED_IN_KEY',     'i=8&R_R@<x+z3nG=n^o{#EK5(ytd8N9rsid@,QdDuTv}lDz>&!AN~qT/Mf&B}=5;' );
define( 'NONCE_KEY',         'VbvS=-qA2xMH.AZq0EOgjMR[/h~]AY&-)Pf_W4bcV{MLj}4AdyV_(WOMjm[:gHP(' );
define( 'AUTH_SALT',         '0~P^_%_8++`v6H+|xv%<*p[B!^T~zYC$`z{qp#^HQcV:/^B/^)EjrJF&`Ys2rB#h' );
define( 'SECURE_AUTH_SALT',  'mFf*H#]ufm~6l{Lk+D;qcH5&RnC%:*m*V_F)&&`Te4Bz>9*hq$W):B6&yx>Unuc6' );
define( 'LOGGED_IN_SALT',    '6LI?#Jm{f=|$Rpk)SO_)xc[oA8Qbw1H@NI:K3kEg%j0U/kC&EN|VSH9uF-~%o;]Y' );
define( 'NONCE_SALT',        '#z[}hm`_],C(hMjzx5hyQHkc4=r(S2jed2e>lKI-3Nc(A>fv{kFu`0>H_^jS!w(%' );
define( 'WP_CACHE_KEY_SALT', 'sQ[y+{Tw9QdHO1KKUiD|GU-b]!MN?H`!dOAp}uFZZ_X:[jnRWHq1[/t;$1HSOol!' );


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
