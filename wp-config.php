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
define( 'DB_NAME', 'xs159625_wp2' );

/** Database username */
define( 'DB_USER', 'xs159625_wp2' );

/** Database password */
define( 'DB_PASSWORD', 'rvaft3v9os' );

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
define( 'AUTH_KEY',         'g4t&GK0&f%&7Y0@UMkO)NfJ7.W$EO}=DPq=zENnw*Ge=q}cJ[NwF+_d+}ELMx88/' );
define( 'SECURE_AUTH_KEY',  'cbAsRx$5Ev2NqtC/mblv)6 ?rqL(M=/9@5YzK,7g.IHgA`Y]=j47)M0A0AX;{5Bb' );
define( 'LOGGED_IN_KEY',    'L<AhErtlU8M/(qirIPim2RwilJ@2l0*iS(JZaKF^*$cn60yN2+|hlq3I_X}9>[Pc' );
define( 'NONCE_KEY',        'B658E4RK!p68S>14E?[|[.DTWJ$tI[OA}I MO_s(r/vNgVTwx[Wen9bv2qJy77vI' );
define( 'AUTH_SALT',        'SQ$[i8g&(TZ*(;b{?ij|4?c6/a>zz/$g10gDbr9.jFb]wiShP/+o%g2lv,Bw+N/P' );
define( 'SECURE_AUTH_SALT', 'D+t[|o2Kcv}XC)RF5y)xtBzB@/>95;8$BAAFlfh$H&Bk1-=8rI.PtRnq.=;MNq7;' );
define( 'LOGGED_IN_SALT',   'S8-{/U VXb;ZhOHqAq_M%xRaqh`raK8bHzBszGLg%<!h!#(<^#MB1^mZ{yGjKXF}' );
define( 'NONCE_SALT',       '&fq1LcT=Dn6qmsYTn{oDhkH-:btv}#$(QH+?hyBDV?WyP73Av5v?uwEN`AzS:TU@' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
