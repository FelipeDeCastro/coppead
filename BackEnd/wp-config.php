<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'coppead');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'felipe');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'cXQEQtlBEd5lqi1VRuPaPim3TmE5MLSbW1lMDBUV2iGbgiLdx5HI64XEgOykdSpo');
define('SECURE_AUTH_KEY',  'JqNuMPGQeVlZ1b23yrO31Rf5p1XKUJ5EvCB6Ql0mNkBg4B2VKxkOBwL3lEPvPfTy');
define('LOGGED_IN_KEY',    'gfYucJi1c4NZCN48kvCCyUsTrk9kkG9b8Sm9YeLel8BYcXTYnTeuRJxEtlAQMpzf');
define('NONCE_KEY',        'zqLxtqhXc9hAvcvJ37uA0BNIfaFOfg4jLsBveCmVgGmUtjzmQ2HRRwKe84CAbqEX');
define('AUTH_SALT',        'hFGJgWg6asBWFg7XpfoZLIhvnJ2r7c3zQDbJktEiSMCT8IgD7xkpY1ZUvrJdJlcs');
define('SECURE_AUTH_SALT', 'D23IiiYlivBECfg6A9NIjrvjQZXoZUebIuCGmr0NoBJ1GgTi3Vf20aCbmUfbPymI');
define('LOGGED_IN_SALT',   'oO7WpZiBy0BLYsx7q3uHcnbmVcjXuxASqY1LUNvIuyyg9sIyjgY3x1uK9sfdXw5P');
define('NONCE_SALT',       'J7CuzBGjwm0QYG7ZNsFQeWV19FKtfEv5waj6uil5K3x3u741Sl8uY5kmW4JOgWCY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'pt_BR');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
