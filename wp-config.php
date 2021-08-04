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
define('DB_NAME', 'superimperiodb');

/** MySQL database username */
define('DB_USER', 'superimperiodb');

/** MySQL database password */
define('DB_PASSWORD', 'lukinhass');

/** MySQL hostname */
define('DB_HOST', 'superimperiodb.mysql.dbaas.com.br');

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
define('AUTH_KEY',         '7mwgxgnnjeyjv54abimbnzqnq8hgxms20p0oj7evqktdbt5xqo8rl2orfibpdjy0');
define('SECURE_AUTH_KEY',  '338i7zqbuv1dm23maa0xqfpulzeztzmk7hq1vtllr40s09dbvyfalukvjytkx0fk');
define('LOGGED_IN_KEY',    'pdadzvvd1rowba1lskiaknldvnln2itzfb5kd2nli0dpg4c6u8tdkixhjjir6iyl');
define('NONCE_KEY',        'iw7gqzoiv28y5rpzbdrrodnbwi2mmnjan8rpukrusb3hlvwnlvk2k0vutfn0usui');
define('AUTH_SALT',        'xylkjagcluona5ibjpviqrrmo4pefj67phrxcsflaqrs96dabpjqj9oruku6otwb');
define('SECURE_AUTH_SALT', 'vmxxcecmrm6ct9aosgpamfhzijxp9ovigsf9egjhwpfzj4ornsszurm5sjoginao');
define('LOGGED_IN_SALT',   '2o0s4le9u5gedova0hgm6uwmvope2uwpcuestqfdvz8hgx99yvbcmn9mnhg7mjta');
define('NONCE_SALT',       'zkdfyg1xktkmjpv3ftxehxsl60pax0uqyvz6yqmssby0g0x7pkdo1fcaxmppond2');

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
