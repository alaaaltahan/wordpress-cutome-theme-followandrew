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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '6FakqQiE/k+J2V74ajtKJzY4LAjS3IQqIZTnzB0ZKcN03a1R0b7Heon88MWOxinIp6g/CEyJhNU8QO6rhvg6Kw==');
define('SECURE_AUTH_KEY',  'ncqoDBos+hTq850e6wFQgDycCEinPcMmPjMQsjn/NT91sLny9L+G6ZGfMUv/g/0QmYz0UvVvGR/yodVixLM6ng==');
define('LOGGED_IN_KEY',    's8reCxP/1T+rIHEEIm8yny3jWtmo1YASK+8jPVocr9eMzPFSlP0YoHYMEVN42Xm/EGYALhcJzaD6nwPkFKJ+Eg==');
define('NONCE_KEY',        '55ncbsAWE8EIkoCOUNvONKwFB9lIhNBGw39mqyL/kMMnm+zxx153diAR3PrIz5+myM+LVlfCzFPbCZY2szgZRQ==');
define('AUTH_SALT',        'DSBWiAOOFzZHP2VoverGd6G7yJMgD4CjhQivy/RqHuXk2jiJL7rGaAORDRHtX66xnACl64uUjqCVwnajEv4Amg==');
define('SECURE_AUTH_SALT', 'DOxg/6e2llwyPaZV5y5jvfLBcKnVc7oWLHeDliDdWxNO5La8VZKiNeuCLDgy4nPEkZ7a25pFv4S7PNE7HTeufg==');
define('LOGGED_IN_SALT',   '5NWnFOUwkTYD4PfZ1JvbN8rD9G6J4XbrlrbnhIxNxIxp8lFdFy/T7y9pnSrljnz0fWOBA8wiie8xILNBmpH1IA==');
define('NONCE_SALT',       'x1rbHv92QtbzltndLHkdkCIT6PCfEDq52qMoLOZ/mvndLCpXIdoG1+T7ZCxdWHmSq9SiyiuTEk2etgIt539p4w==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
