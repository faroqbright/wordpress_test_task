<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apexgrcp_wp697' );

/** Database username */
define( 'DB_USER', 'apexgrcp_wp697' );

/** Database password */
define( 'DB_PASSWORD', '.fpQY6S!70' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pexsoho15gsar87afsbipqilkuf12dnkcfqeubakepfnsk5hmtvizjpyzzmik5jq' );
define( 'SECURE_AUTH_KEY',  'noqwhesu9t8azndtqucglvvqfl0hteonqz0z2bbllwzest5qnjsjovceblmdzpsa' );
define( 'LOGGED_IN_KEY',    'ntwqmwlysptkte2adstbs9ofsip3whjwdgi5wcjhkynuhzdrbr52kuqom4thpfdh' );
define( 'NONCE_KEY',        'tjbd9im5kmytv9dqmeh8n4ldgfv4d8r2zo6zwccp6xze8tq5pgfrrzol3xnuascv' );
define( 'AUTH_SALT',        'ew7bot5bt1hethy7khu0zn00izc9cvtnbhwwztj7ztla7diw6ho8xywgikgd4tkc' );
define( 'SECURE_AUTH_SALT', 'lmnq3nuudjcwor3iw0mmjm6toecyn8ctamhwzihxxivkjgqvnog9emzl3lcm9k53' );
define( 'LOGGED_IN_SALT',   'rpvrv9zfwoqq9okfm4v5nslshs9bejc7qz7ydnkfpjhbojzfdcjrgk6x6riojgm2' );
define( 'NONCE_SALT',       'tftgrxuxckfpkghakvleovvi3ftjkbqpwpppcdwaiy5oqamaywbg5eg23jbo7wju' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpho_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
