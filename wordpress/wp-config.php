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
define('DB_NAME', 'EMC-2');

/** MySQL database username */
define('DB_USER', 'dudley');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~waGIi. Bk.v;/~u5qKUWfKs:$a#+MA0vP:`;qEL*!3t$ZQ0oJ/./.L+XVXkmLqW');
define('SECURE_AUTH_KEY',  'Z4S`>_%gt|P0keUn+Vo1CN|d#1~,+hG_|cRhDywbHcoN*PeF|-26/@FEOInqTFDG');
define('LOGGED_IN_KEY',    'Iu5il^[0M2? . ($U:S?~r.qu^!BvPmQZ| eS,K)Tq(R,c0&%ou 7@$-sEe3i]p`');
define('NONCE_KEY',        '.=w!2Cr=vWx{3u@2RV~5/Utf1-KqhJ9H9mzEL(!B.p;zq:WWNc*_dTu4Gi9OS>78');
define('AUTH_SALT',        'Dvby1)`Lv$) @Qw^0V1~Cf}!S9v>t<G$`;lIlh6WL7SsXPc@il`_ZHJ/?/i%j$n>');
define('SECURE_AUTH_SALT', 'yEd]jf2u)~RY2Xnq}}h+}R|d,ApM r/S~yU*vwT E4^qzORewO7Qj6;q/O6<<487');
define('LOGGED_IN_SALT',   '_Au_)`#%dunc?$kho+/_#%c-bs2LOjA!GM5PX?M!.sx{cg1iJP=7:Pk^IkSi/0lM');
define('NONCE_SALT',       'f4x9U(U$T1DAp&xp3D]4Q70/1Ji @M4m9+ e#_[27Wu`5$TQ7Pkzm~j>@6#3pD+t');

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
