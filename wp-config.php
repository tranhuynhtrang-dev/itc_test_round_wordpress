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
define( 'DB_NAME', 'interview_test_dev_tranhuynhtrang' );

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
define( 'AUTH_KEY',         'KJw&iepjdUvLnlsAiT/m(D2JETZF|coOE-E}GL,YcL4MB}g4a&n;Y0(?j3+VGVda' );
define( 'SECURE_AUTH_KEY',  'U,_I.&/PuIu[!fEue,;vK@iI4PW`@y*i!?H:_2#[D]rvYMAl5`l=gZU-bK>FpV&9' );
define( 'LOGGED_IN_KEY',    'cwWwozb?qd_wzL#>LiZQRq9Pr}ac3DX}@ahr=8XzHx>hBBK^&E$aP;Dq Lo3I,j<' );
define( 'NONCE_KEY',        ' Vg7s?mH!GY(Ta[o-NLZ#;(!^YS>JB}@}|n`Q0KR#4Ft0oh{Xy]hg))FF1;gkiyr' );
define( 'AUTH_SALT',        'r%SxjE0Nzx?`Yo?zG!BS8K.Q@BhKbbH/-G=gkfLZD$#p,sNcGG;_pIP`M7|76J,i' );
define( 'SECURE_AUTH_SALT', 'N?`L|j[$m;W@ASOIK?9j_x=N).cfc8(-__Id,st)C-il8=]VSm~Bsg+.UW${CORg' );
define( 'LOGGED_IN_SALT',   'AE+VB+(32pVx-`D<Ua&_1qP3DT%6I()/!vOMddZPvTc.qgeh<et;n~S;h8tpDl*X' );
define( 'NONCE_SALT',       'E&U,%U*m|68nWWnwVt>4c;cbJ|f[LoFQ(szlK+0dIK,`9`8Z+e8wEFEf<|.1y;Tp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'itdtht_';

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
