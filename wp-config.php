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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|)WG,a-1*H?ldIEjzYI[t9b/&KiQ)~XS#gOU;Qi0MjNP^1-pqgYdGUOjMiiX3p2h' );
define( 'SECURE_AUTH_KEY',  'EVHqFqXPZe}C}S/{z]&$ykM!^hq7:8vfl!8,eC9MVS%^>:TQGn@HpWe+RXz<cC}G' );
define( 'LOGGED_IN_KEY',    '1r#DoFh0onLd@4&M>pFZGWp:MI&;%2/@0d3))gp$C{_f&6#$-0}82AyxSXk.4@Bs' );
define( 'NONCE_KEY',        'C|HLsVhucau_^g8l>oGU}8^AqT]QZEB4VT`x-=S*,@?Q]$~>jE5%@f,2D )%2BzP' );
define( 'AUTH_SALT',        'Np4F::9GY(A&D5A/3P*_I&D}5)!+3Y5Vg,uk (dQUV3uhAc0}vLV4fFpQ~t$uYfW' );
define( 'SECURE_AUTH_SALT', '[bS8]Y3ShUxzg0q$w@iR)Mm^6>4vWD-;4E|gdbm.McYDJXE3Bv78-Gzs?c@^hcXE' );
define( 'LOGGED_IN_SALT',   '!e<zF&fUkO^WzgvWMPhSz. 3$T$>5E+J[`t^Uf001-#3]:Bs-B3>wQ-|)/wPJ#O|' );
define( 'NONCE_SALT',       '16%UYh@2nAQIe9%3?9^BuTJfRmTuR:-C$OXDu/b}`}D0Y4Jg}cb5_Z7*@ suj96E' );

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
