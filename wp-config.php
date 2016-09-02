<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'perfectchaos_se');

/** MySQL database username */
define('DB_USER', 'perfectchaos_se');

/** MySQL database password */
define('DB_PASSWORD', 'zUDafHRd');

/** MySQL hostname */
define('DB_HOST', 'perfectchaos.se.mysql.service.one.com');

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
define('AUTH_KEY',         'FRo1385f9dmTrwwwGj4MJ9ps14rWuFq9OzyqAp6bYGI=');
define('SECURE_AUTH_KEY',  'PIa-DYE1eZ1FAb1MBgNNpPRoZQXGy1bktEtdza6EAyc=');
define('LOGGED_IN_KEY',    'v1b-CogcAVNSephF7BIMQV9M0XtxmIx4by-KldrSNcY=');
define('NONCE_KEY',        'XcTYTUJh1nGCPQ8WdywTpQ6IXS0ZCfaXW-5d2AxqttU=');
define('AUTH_SALT',        '3NI7Wbuga0c2hiviydp-bqX-5oWFbj0apsa-joCq2pw=');
define('SECURE_AUTH_SALT', 'GRDbpt4mcumbDFAXCXpT-ihsNDQOe97iSqcFYk8UzU4=');
define('LOGGED_IN_SALT',   'SQEvER0937rfdJ3Y8Qg2eufuHsmhQJQC3KA1w3X_FuY=');
define('NONCE_SALT',       'hXZSH8ED5ehIjfnsOe7rY2XEd9mBxHKjj8wyqlTzkpE=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'www_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'sv_SE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** 
 * Prevent file editing from WP admin.
 * Just set to false if you want to edit templates and plugins from WP admin.  
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
