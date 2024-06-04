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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_solo' );

/** Database username */
define( 'DB_USER', 'mysql' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'KO3dV?-{@Z6q*h+!*u5XkiNM;i#<hV]^?mc][ea=GHF/AB_B@X|x$R[AOAF9lQJ~' );
define( 'SECURE_AUTH_KEY',  '!z)GKWV&0MZO_7Ds,rqT#4+JfP[3srfaIu<+aCsMD6EFCH%gKQ!$;jC@I&s XvTl' );
define( 'LOGGED_IN_KEY',    '&x{W26s>3+8;UGYCGJ5IM2refl0V^%A%VUfvYdNJ#g+cy1WL~Uc&O;QOhypJ F*w' );
define( 'NONCE_KEY',        'F.I%XvGCTDr0V<F#@1gDkF`r+@1=u!oI9#pIH6ueC$4D)I3]PR,PeY.qqnI`2y7N' );
define( 'AUTH_SALT',        '~$O+MSx2+,XAY9$F<)W-7?+kgcv^9ku/5bEjNB~1x:B9HX6Ph)/*nkmMW_YDIn2O' );
define( 'SECURE_AUTH_SALT', '+>Sz&]O53WEgvUCuaQ z!|Ocg(J#>2h*w.3G 1KIrDE#IGUn)ueuy`cH{) 4~S.,' );
define( 'LOGGED_IN_SALT',   'E^vbRJZM :)P5otPy4&?uS3O_.? oPMD2M*.LNeuByUJHdHI{m8mi8!dGl!=t%|T' );
define( 'NONCE_SALT',       'ZzooSb wnPj*=]Iz+QYw`cfE#WT^h806r/Z#`(Xjm(04s0W5%bD#mu=NH.-}ZhDY' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
