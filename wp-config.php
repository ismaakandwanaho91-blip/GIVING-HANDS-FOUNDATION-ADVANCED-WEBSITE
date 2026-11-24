<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':*gq&wd8EVYz`|Rh!rf%)F!jAiCUf7Ftc!(n(lhcW?n[tnZc:rC8?}^>hAg7`{oW' );
define( 'SECURE_AUTH_KEY',  ')_X#@IEJ)_oi5< R>+/1>b#Z3]WFZIr^lB=UNHq^: 4uy.be=dG=;NpCv|dfJ{@c' );
define( 'LOGGED_IN_KEY',    't:s@@zCcqzSDF5k.rO=|?IdQV$j7[L1>!m/9UQqYkQ+F0f^#zV2(W3 ^=uF!7^Pd' );
define( 'NONCE_KEY',        '}D-TlC{X0Dt2cxV+E{q_iit@Oy*1-i(Au9@lXELJS0~a{F]>_%*y,)Rg=Bd3Oibs' );
define( 'AUTH_SALT',        'Hw[QeuPfhmw3~.geA.t0QKX2Trbs)RRrPP2c(vh7i%BB]9DzBJvrPMCa:0q_U]_y' );
define( 'SECURE_AUTH_SALT', '$.AszCUBN@~7qJcaVe<cW G28&#uN~Zi>EI +,`VBDowYF8.6SzBw4%-n pg|v0Y' );
define( 'LOGGED_IN_SALT',   's+$40ZdS/-2turU9?ta<}vGC,#mBHffj{Mbb@nXfN1/{_gV  }J0o]s0H{D,W;&M' );
define( 'NONCE_SALT',       'Z0dW<@P%,<SoNajK&B1F=z::%j6pisni%c9/QmIwFQ{XM=kk,[Mfk`E@.?>;wJ^;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
