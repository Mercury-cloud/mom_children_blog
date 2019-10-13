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
define( 'AUTH_KEY',         'VU(1R6UuJl,*qo{A8&lK$LG6j8s1qQ!08H,ml=N^%]H*zh`d.BC/zUd`Y|DnrlR@' );
define( 'SECURE_AUTH_KEY',  'RjJKy.!rl3WrG/f,VjGAzM%@+1OlSK=?bQ4~yxycaOT!)&`{EUZ;ec!Gpazh(9O^' );
define( 'LOGGED_IN_KEY',    ':@y7QnH;c,b[zfSAWZ)#+i5uAH2e>hgw]/lY,Ao`K#z)p+f(hj]p@UhO;|mXYY;u' );
define( 'NONCE_KEY',        '`/qYN0xv,0I,4?v},3ZB3U=[(Mj-%R!BB-If~.XNAjNjO#77 Nyj1}f#x*Em(!7u' );
define( 'AUTH_SALT',        '%esaK0GY^okFKD2 y$AhU8^b,rR&K[Y0Qy4/!q*ELO60#e%.U_:Vvz)y*6ej+WZ8' );
define( 'SECURE_AUTH_SALT', '{FBICPI9rlh9?~`>zVu9e5?G?qaHU,yl~v{(3*|AjZL]Jk?]8t@/{; pRxF})gZ~' );
define( 'LOGGED_IN_SALT',   '[C@v5.nl+Q,v_r45/PEa;w.kn9`cX$Xf`2LM</AU:J]T+mZk>I/,yVnM$5SE&x$w' );
define( 'NONCE_SALT',       'qpCQ(NZ=k4g=Vdz]]1O4I=8@UR2U7^?=mJpe>fb$U=fwy`W8T&a.oGt2dtpv,1/I' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
