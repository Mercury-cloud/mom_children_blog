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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MN)1TH?cjMan7$TN!lr38):u)kpBx6!Y^?^*Stl#[.g<ydv[>a,Emo.-aohmE9J[' );
define( 'SECURE_AUTH_KEY',  'WnXCQ:T-V%NKTo0lLEF;Cwm+<Wv2vz*UgNwIex,MX&m]wRgmcp0z&=:KI3@%;vu@' );
define( 'LOGGED_IN_KEY',    'PsM(j?yu#XL6$gJ6J<Ecpv)!UQ-wxp,Pfaqoa<:WSyuc~oXn<BS&.<FxOwE^(CYk' );
define( 'NONCE_KEY',        'f Bhq%C_C:$qjq.nAZLu)QeoK!.-zxu,js!rEILx[9CLS$QQJiRobxT6JPIskE7D' );
define( 'AUTH_SALT',        'FV=}=v;6~7BciSa/zV>]g!GXNx7bsW%E@0`H_V)X!v>}U%4bu6LzH_b5f-wnM,4 ' );
define( 'SECURE_AUTH_SALT', 'Am7x_Y.yl[vXm:n&y.mX}l^R|w{[}.?7L!V/3/2aLYPju0&9~KHmiyBpbP{;[>cW' );
define( 'LOGGED_IN_SALT',   '[YtmJbAi06|;@|hprt]]{^(pVjDUEDa0wSN/yR39K+RwbK12SW|4malWy gZaLR-' );
define( 'NONCE_SALT',       'v|Avs+lt.4Qr?clS_SnaU0 u{)kZ@S&(l?m*YN3:]+(AA(PF#Ue>|[gaM=JAgn{~' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
