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


define('AUTH_KEY',         '3XNcdgdL1Ti9eXA7IrJZQMAB9/EcUvzRaj3TgCXlFsmjUJXWej8S4gl9k5Q+X/XxyGLMu6bap2/zJMpnu8VHtQ==');
define('SECURE_AUTH_KEY',  'ovqHQ0wVUT5dNpVOA+pA/57us3P5dUIPpkSy2Jgk9BnaX8DWooPWsH9ps2dNJdAgpWibuLn2uLy8cBZUEuoLig==');
define('LOGGED_IN_KEY',    'WIQ8uQrHw4WOzX01uofHjrSeJpC6BwB/83JqriARFzxqQOwexSfGwmCt/cd0f+ak5Ypb3i1V5YpKp+OxErd7lA==');
define('NONCE_KEY',        '/Mq+THpvMo9DlXcp8rzPQvO/q3nqdQAwj3IhQ/wG1syCIici+vXYJgaXYSBlUXzFJHEW1DhEU1E6YYxURsYA5Q==');
define('AUTH_SALT',        'C8aPozwzQhhdUcENnZhLT/05CBYH067WihaZLEvqI8TOIta7Fa6Sn6+UsXyMCxZ1BVV3PyNz4MisGLaruc9DSg==');
define('SECURE_AUTH_SALT', '8v+mD0XE3wOo6wk8evzGcDk09csWcpzoJvAKPCPBdw2H4ZOpS8bDGisodyCvZsvLtjgqX7XJXhtcD78q9Hp/Hg==');
define('LOGGED_IN_SALT',   'phMCoiI9Ym3YGDj1sz+4K46XOOin8oZ6swKR3X2XFG2UwcQb+UoM/6MKJHQFoeEK4xUHJO80xCEKY/soatVNCg==');
define('NONCE_SALT',       'aXNyJId5VZZQqR/NNT8OlU1UWDcioipvGMIyW5V9rwg6G2LwNBPtzOKxccED4xnrGtEJdbR7iEIvVery32UUaQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
