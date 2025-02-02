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
define('DB_NAME', 'u0167704_prof1');

/** MySQL database username */
define('DB_USER', 'u0167704_prof1');

/** MySQL database password */
define('DB_PASSWORD', ')qw]1P3k5S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rngnsrqb4nhoi9lojkdswo0p5bruutzheo4eazrod2v1hd6bcnwppcq2jf3nf18k');
define('SECURE_AUTH_KEY',  'mpvlaig6j0e5fhddfocgnoaqhzsnsutpriu6ufd4qicklhuvkzt3xudrlwxa8cju');
define('LOGGED_IN_KEY',    'xzpwmlt52f2fmr8iqj9som0tqajzcz6hlgok3pqueugy5wsnrky0twgcprwo8wys');
define('NONCE_KEY',        '55nf2kaju1m56mmlkdslikji4pgp9yuhpgbu3eeu4db54sudbfj0a1k7zajlu8yu');
define('AUTH_SALT',        'q7zjozsuvyw0hpgqqsrflsuspvbcbz22g5syjiy8fvmfqusfbk4c241hkkfhl49d');
define('SECURE_AUTH_SALT', 'k7hphsk4livgfwkq9euep82pgn30r5lubvi76jmqjp8cfvxcijjndua4rxy7josr');
define('LOGGED_IN_SALT',   'qhbng2ccmrfhxytoyledqbdrh9faercupyhfj7lpzf81yf7hu41thfkejh6f0wmr');
define('NONCE_SALT',       '8dcdzovqbgya3acq2ch75k9bb2r8v2yggiifmir5lcl71xszmlwmx2pm71uxbirn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
