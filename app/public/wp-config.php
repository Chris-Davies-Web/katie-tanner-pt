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
define('AUTH_KEY',         'KDu8q8lqYPjwjMHIYW2XwOD+F6j+FXwyQFQWEOdcDmIIiVm8nOIdROMrVu2gztlo61Nl9Bk+A8bSsNrfHeayOg==');
define('SECURE_AUTH_KEY',  'cl0/RxCwHK5MWhK/DLglTgmkCCC+ll4ms7ybLc1psJuyhJ4g803HKihjyICBXAXXrJIidALNo8OupLg28ACQNQ==');
define('LOGGED_IN_KEY',    'UtHY3kAWFWfNXgvcYhnTcW/fFeahXZKVTNwwWBnZfVC4cMPhDQO1rMoeGyGo5TX3XtKOxPppyyyiXO5xC7Bf4A==');
define('NONCE_KEY',        'C21LW2FtgdDgkxt5uDNiaiqrN0APb2VPqMcK0+I/KrBMYCDQrCAQd+AhU5u9j6B1Ys/n+8zp0KU/DG8rUeDOfw==');
define('AUTH_SALT',        'g0x9Ns29vXSy7rIUWFnouJQ1xklWZfGqbqtJU4AWIlbF1KVlpEDNsarE+pG9SusGGHOkXQEJZjkJvTFJydzUYg==');
define('SECURE_AUTH_SALT', 'bvnA2ljHq4bwy1IoeqNGWdOeF828/5r96vl7w1mZyycjSYz3HBIg22Dm1gyp+gwBNpSOzqHMoAq9lKRVawR3Yg==');
define('LOGGED_IN_SALT',   'o2tp3ol/WH52WGrQQq6Fk8o3f17kLjoIkMuT1sfBzcQawwqFe4yTxo+2n+6WOlxpkf6VOVDtls7sAOZAPg1KYg==');
define('NONCE_SALT',       'ZWn/tAf4ZFwy4tcd2VxZHchFaWb0Y9U5rdzkbRSMymDxWGV/1Q8oPgY33K+h4FNUXTSxstVaEjnk40jwt4QYQg==');

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
