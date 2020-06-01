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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x4yW6iduydHYMD/17qWn1KMauYnjxUD/tmGz09iY60Mn2FAjDTZhmKrgeZ4aANSd8EagUdTJKpJ3gUPCFzRf/Q==');
define('SECURE_AUTH_KEY',  'ZGel4LQfqJrw8h/MtryLclRpleUD47w7DHF6t0sqIyZ7eP/kiC6jX5nvsRdWnwBE7vfUpFsVW5FC7Om1kD0eVw==');
define('LOGGED_IN_KEY',    'eZyGuQJNnQFM+rXMjNtVXPPvJu+hRGJPm6bfe6falroF2DPyDvfydE3FQzlm+vQ5PNVZMtDELysSYbrMnWv3xw==');
define('NONCE_KEY',        '5vwSakD9BLoG67ToInwU61pa7to3xyQkzntcm+cEMyiQ5V/Fw31e42X79aXIQBNPnfaT+9XsTxtdWmx6+qq1dg==');
define('AUTH_SALT',        'j6kE1TcyRufvtnFMhFVTHBisxnoTZLIuBKDIk17ZdFV6pj4rwjhw9MjY7PvQT7LycFvSi27NJcV92EcWD1ZBgQ==');
define('SECURE_AUTH_SALT', 'bdxTNidh7VGe0Y4hvV01ziXKSMu5lEi6uaFE1uDO7C1k/HXhzFoKsDzej97QTNiEamVNqXm/DqOXgYwqRmtVlQ==');
define('LOGGED_IN_SALT',   'yJaCz4ZvkRk+CR21HpyPCP60P7xyNDErRcM3bUTl3sJw0zAfLefYV510bqPJqMVZkqWmAR6x/37KkX9jGiJkPg==');
define('NONCE_SALT',       'v9QPMerv1pmYl6Ba2xzQuY8PT4uH4YVpwGhK+AB5WxaLf8OtQM6lByt4hBrloeULC0R9/YsgkS+qBsfclr64hg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
