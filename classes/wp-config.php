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

// ** Ad Hoc
define('JWT_AUTH_SECRET_KEY', 'vnygosieg8rtuovdr8tgyubvodireughvb');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i5137467_wp2');

/** MySQL database username */
define('DB_USER', 'i5137467_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'V.DyYKTKTapzcLCgB7d58');

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
define('AUTH_KEY',         'qXu8eT84xwDpxqIlQgKuzv3GKqwX2KMsFctVprF7Il3EAqjNFv7LLNNqBYyYIxrn');
define('SECURE_AUTH_KEY',  'cHsm43fLfVmzk5gq44R754VU09jL4kecQAQcP0BLnZ6chGoOXBanSNYKgg84f3qm');
define('LOGGED_IN_KEY',    'EgKpvQnXPMLrIQYxSgGvuexC0hTALDvaYhGVYXbjeLzTEhoo8ExZ0v85aRcKFJbV');
define('NONCE_KEY',        'fZcE2B06u8PF4M4WeVmbiB3qzgmqMTGGoibNKkJL33E9L1Btrd7ShvY7OSKTKU56');
define('AUTH_SALT',        '8gV8CelerldGKjAJtXdAJlVem72ANsVS6zR7qr9J1eNBlgkWKOOrxbpmqChSTKrO');
define('SECURE_AUTH_SALT', '6PdjMusL5UNL2yOC9RmBwVqla8cujO0dyhDNIC3ig5boLCBDpFwxo846eJ0SByxW');
define('LOGGED_IN_SALT',   'm9pBRp312FjnYzx0HuN9G3AAjC4ClUkBAGpZA80outAfiF5wC02P4IBmmSTIkGxT');
define('NONCE_SALT',       'Slvn36hgcC1FnGlsLqWMasQ69ISPdEDcgl4LIHBnlJ8evlByFJzwVJEh6mSYZ2Nl');

/**
 * Other customizations.
 */
define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', false);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'www.sanaabiz.co.tz');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


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
require_once(ABSPATH . 'wp-settings.php');define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);?>