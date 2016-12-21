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
define('DB_NAME', 'EMC');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Enabling Custom Javascript */
// define( 'CUSTOM_TAGS', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`I?V/~,Vstk_>P[+r(|)t{pY?!].ZQ(mGUR /4Oz3pj.~3mW57!M:0pCr:BkO0Q*');
define('SECURE_AUTH_KEY',  'FL^/Tdf20DX/)(_:Y}[u{*}9R?PpWK`LGAo!AsL4<&vsgH?]Zx(4GFXw  y$LmB:');
define('LOGGED_IN_KEY',    '%D|IiT Ord&6L?8,GV9U%~Z@&LBUTc=3H2.Y0<S]Dpdm![Lgjn2(T rkcpk_(y$1');
define('NONCE_KEY',        '.#Aj>9R2u]U3`SCMl^v$)?SYH{Fy3cNOi3>~S i,A]D_i2o*0%d]UR+k(qTJ^Jw/');
define('AUTH_SALT',        '`Zt6}No;_<4TM8E;NGjA/?(xSOtw)cW2Vma[Pu=gPTaHW{NJJF-Uh~QXC ^!@l]Z');
define('SECURE_AUTH_SALT', 'h$;VpQr[_K >)b*wEo/ej3{G`+]m75mCUDpFa9Jw+q!.l??5<qvJ$EK{)Aysuf@Q');
define('LOGGED_IN_SALT',   'jZIS` t*>%L*)#>-MehV33kir76^`o+w}%O:qzcRwKlDe.|3: Aw u[6I.9F>$tn');
define('NONCE_SALT',       '4h@1k8^MpFX/59~lri5iqSu%N=5`vGeM2#sbG[Gw~||JR$L}reAmL(gkprz(]!X>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
