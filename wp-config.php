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
define( 'DB_NAME', 'sport' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'RM/5:QM5v,@~05Jo*G`bBzwEg=]f[oFH#FCuR&p>-FS-q5ZdBT:bQ&0UVR!B~,Z:' );
define( 'SECURE_AUTH_KEY',  'RrfBGt553b~1B|HH*7(J}!mt&hm7kL9eISQiGQLoXCi@X30faXsIH#EN.U%pt~jA' );
define( 'LOGGED_IN_KEY',    '1]~4Gs1Tof(QdO57#;8odx,!N5E6;$S6~%[C-#cUS8ve#NpNMU$.}.{CmZsGt3Kw' );
define( 'NONCE_KEY',        ';=2lr)Carl+2vhprT-@5k`/s&p~N8z$aS.c8w8H@e}36:O)&+BJGA}GR|/QPp4^p' );
define( 'AUTH_SALT',        '.pC26rvX=W{|@c74!?L8C3W`n]mq*<B;ti7`3!~W0PSa)`M#VP`B9L$.*(>uL2]=' );
define( 'SECURE_AUTH_SALT', 'fcr#@[incOvUtOUMHUmsh]sE~.JKeCt2Q;ji88> I_#M,rl%z<qyJ[M_gEJ&g]Ot' );
define( 'LOGGED_IN_SALT',   'Om/S)}FY,-_Bbj+.!$+1C VK6BP,5f))RQFcu_x`:jJg*Arx9;V ?JXm0$rN]Qpj' );
define( 'NONCE_SALT',       'sISk(B9HP.I#~KR@Xxiia2OOop^ 5: fG3fjHYsjTq&:|Y$2T:y^s0/^%m`%^hU[' );

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
