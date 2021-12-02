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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcoupon_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'dnN4uJ5&qNwBPq2P[B=hDbEL]BqbpO7AA9R#;80Be*-h$I25AyX<xp$)w8L>n<]v' );
define( 'SECURE_AUTH_KEY',  '8A{7{v{Sd|!&m:H=fSk(k/&=;u(!ZgWH/L@x?KEVc.au;(VNTCex$o-]~~.fj1GU' );
define( 'LOGGED_IN_KEY',    'lCJVDR{V.UDeNQ&e,JTFMX]hqdg!|#C{29s5[6~C)B[i[h tN{0q+nHn#nY0VLj%' );
define( 'NONCE_KEY',        '3i,p6.FK BLPSm9Z^(z,:jMZ&?hL>Jk;3Op(%xp>k_V^,d(VMVnU(tMq4#ceo3U~' );
define( 'AUTH_SALT',        '.W[Fh-^q3:{c=[;%r:]E$[LFX52=_b>lLh.IsBLM^{?)2;s %0NW_eU7MO:5%+=.' );
define( 'SECURE_AUTH_SALT', 'Wr>bf7  d6b(NO54=s2Ik|Z7Hh^GTTq5qdLQ}bQ!i4=?e BX&>]#HRIn]rT|XiWf' );
define( 'LOGGED_IN_SALT',   'oN6P!5Wni^r*WeF=]SlMLkE/,N@Ln-LMyAkK;;IEyE~Cp!sXN#E<+p#8b&${u?#u' );
define( 'NONCE_SALT',       'eTuq>HJH+21d~x1D+_dKHsB#YOgjj 6!1%8FyMbZ%5!rox^H&I+UBx=I=&gl@c?7' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
