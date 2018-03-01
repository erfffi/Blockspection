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
define('DB_NAME', 'i4360503_wp1');

/** MySQL database username */
define('DB_USER', 'i4360503_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'V.&auC7(lvmzz1gE^W(10^.9');

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
define('AUTH_KEY',         'Q9eNtkgkL9jDTx8hy0nzAsjlDYfqCsbat4FfJZSQjgkCgW0GSyyXOMWOMFdIcIHR');
define('SECURE_AUTH_KEY',  'FqSIxu3V5g9KOCfhQVaKtblyEXBmOZ6avEbMCSL9GeTIKpYJMSkoI4RdHrq8r9li');
define('LOGGED_IN_KEY',    'Rg2hS95GRdta0rR2La4kTsaBSpkq5lMwSarVWpwdN7WyTvI0HmH9MnPRyClpeg03');
define('NONCE_KEY',        'XU4dcWO853Y0eVTiq6AulUOhtPALn8FOtPBI2hEX3vYDSWspxYKJgwPDbGsHMGIu');
define('AUTH_SALT',        'ndajYpPZDQlIRUbFDzVSnFq5Q1eLKdCqpxNO0tasG309npef9Aj9qJ5BxiHAGOkk');
define('SECURE_AUTH_SALT', 'eDfTikPmK1ocwozd91pNTK4QCBKi3i6vvNzZSEnuLMxWqn78zT1BufrlP73vN5pd');
define('LOGGED_IN_SALT',   '4KcTlh5EZeOprKYEoRrwM8TeUOyY0NiiwIZ8ZSK6Hv6xSQ3OYp6HcByipwO2EI8l');
define('NONCE_SALT',       'V2ByAfNkBij2HbbKgfE4bO9UbTY05OhJG3vkiKaFVkn7VnrdetA0U0PO259aJFh8');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
