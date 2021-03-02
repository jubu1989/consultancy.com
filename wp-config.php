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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'conultant_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0&a<j_g+4bV7.RQuUQz1eGDxP-*b`|Tq[T)8o(S|&%q<pFZoW7R1;9?(L kK29jX' );
define( 'SECURE_AUTH_KEY',  '0a|ip%e-+)oYSw~bEc+:,ko_vf?%>9Ruzl;1V]kwt9@mL`;:^6s4byAGgY3mE:lA' );
define( 'LOGGED_IN_KEY',    'sU@jE:B~NWVxk+^7ugQw^/!.`~!BC>^WL(Z-1?%uE=F&XW3J6*$}Kf`Ba`/y28{ ' );
define( 'NONCE_KEY',        'JZ(TsN|/sRjd*=zfF{E^KueXk5KD3>hi%3P}7*3>-W{M/f:iL|[}(oNy_{+~BV5k' );
define( 'AUTH_SALT',        '9SipHBIU(a+Swj1Yfl~_vZ8:zG3TNJ [AjQV>q]koU#5b^fe:j@B&U|4ETc!%a.,' );
define( 'SECURE_AUTH_SALT', 'QXyG3qL4C=g3{4;;bNpe|X w``:J=9#FABjua=o7G<dv)25:7/Td:JE{wV6zni2@' );
define( 'LOGGED_IN_SALT',   '?39@Il4d&Gw-eKK-_lFkSKfx|#>HY~4yYqH0rs5ruqJ.-[`77a(OfBa;>(os&`{i' );
define( 'NONCE_SALT',       '#jMYfeDxp[_OH> ,X l5M$U=)i.;(g;gWYhKRU)9pNDswi&Cz {2Tsa^iLrv]:`|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
