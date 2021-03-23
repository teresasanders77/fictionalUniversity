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
define('DB_NAME', 'wp_fictionaluniversity_1');

/** MySQL database username */
define('DB_USER', 'wp_fictionaluniversity_1');

/** MySQL database password */
define('DB_PASSWORD', 'wp_fictionaluniversity_1');

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
define('AUTH_KEY',         '|d,L7tG BFD82]1cN,w3cNnwP@Z6ag|c0K`~!}hZpEgv/,ekG?D|,nBPPM k §=)');
define('SECURE_AUTH_KEY',  'vDr9B`n,Dr8-luGQOOhkYQ.=9@u@Z8aKdo=Lw! LXZ=,+C{$NBfJdniF~IBZ(_F,');
define('LOGGED_IN_KEY',    'U]4:v}UID36C.1oq_c[,c2@pGZg -1?C~Nt,.DUo$Mzl9dFnEPX?§@a.,6MC}|y2');
define('NONCE_KEY',        '3hj9[~H3voN-;mXP2=$}22jWTu:;x`eBt6/r81GyyZ91+:zr)?W_&%$%T2!Km56i');
define('AUTH_SALT',        'Ak;%PqMh}!&$EkC.mZZtd~:]jETZz7V:2b.}UkF{Jj-smu.`%XNdGK%zDyoi;1WB');
define('SECURE_AUTH_SALT', 'KQ7 C]wS ]&lsOJXSv9cYsF4e){j(O0QOnb%@H%M,k@ tsgITi-sdqUB;d3rx-k4');
define('LOGGED_IN_SALT',   'uP+2§5d>x/X/[BMhfD_5>Bmuxj=@Pll}H<UT&rvLaQtorvLs§~0uR(}J!YNqn J6');
define('NONCE_SALT',       'QX3x|4jk:9y@SHhl2mWCRW7L/xc-Q<yXE:!RjqX;ApFNj{h19EH<K^p5[t`97oer');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
