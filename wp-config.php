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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sub_liminal' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.10.10' );

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
define( 'AUTH_KEY',         '|k}@J^H;}xI]5,NqJ!YKW^sp%>PCU8&KAbD[.J7X-Z?(z(/=j]N~FT~t%ommqLk^' );
define( 'SECURE_AUTH_KEY',  'Lj~Lu[jPVsgYNi=)VLrTuv>9pzhwe4(YHoLn/42f%cB8V2kImL;6SaMCH72SzM(i' );
define( 'LOGGED_IN_KEY',    'N`{p`1k.`2{i*#[ppmV8ed5vsdF?mFkSL+qNruHh[c7[3.VPZEN:]wf0N)Asp`(%' );
define( 'NONCE_KEY',        'zLLft|/lb8PM_l!%t/lB@w>1 P@mnzk@/%.)M6)_=q+6OhyP65A@PDbU*@X=_VNC' );
define( 'AUTH_SALT',        '#O[GKQz)4a}v&j s/-~wQS@xo[eE?[lr|m7?(.zb0+CCH?8pp6uo{8VA#d95AFig' );
define( 'SECURE_AUTH_SALT', 'TnYnKQs4XHW3 xI9WiK5+V@;`k Qa<Yo>D;uR0xMkQ6}hz&-q5nDG-EW-qdV*QY~' );
define( 'LOGGED_IN_SALT',   '_5}F$hajJ=u&i@_I?sx!E`oI(3a~sd5t{*?S0PkcldvtP!a$nax1p~Q_44Gn:XS8' );
define( 'NONCE_SALT',       '0#3w_S6e.N, fQxe3lY:zu)HiMo|`)f0Zp#0v0yL$y{}%xVEmpE9]&i^_[Hu2Hzm' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
