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
 
define('SMTP_LOGIN', 'cuongnn');
define('SMTP_PASSWORD', '123456');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KZ2gapfp5YHP38ro!J&<$*o_?i:/*I;<|Vn,4c^XT[eLOMg(?j?;C*GE8M:F`>({' );
define( 'SECURE_AUTH_KEY',  'Jw4UxrjJ~#lZ6@Qz@vl+fF)z`DEeFdJMX(E23_ xJUim;]zyhe+}Ifd1~$1bC]9d' );
define( 'LOGGED_IN_KEY',    'i7nP(,i)@)B-kG%fit`S%y@ikT2$%pywB#/[]S8.p#e)P^rUS-SVjIy$AX@lynXA' );
define( 'NONCE_KEY',        ']3v,d&]}PF|@3/ !mTKN@GmPIQNJtq1E<#V0KVLaDVDij5#5p<@ow7;x*:~m}oe;' );
define( 'AUTH_SALT',        'Jujpn#0~cXSUd7sX?+l <cls=hpc}eqi=txC65DM7E4<yheY,N5qG7A@sH_>QhnI' );
define( 'SECURE_AUTH_SALT', 'aUJ|5Al}8CGgDyHiGdJ&kv3& [6zV2-`j9MlME!J!tkyW9s5vg`]6<m1bk{E~;W1' );
define( 'LOGGED_IN_SALT',   'oTJk58 v$#(hV]j{+ Dv.p2doKJ}<Ha#58B`]op8`3CZ-l(wdbZpM/J MB20Tg*c' );
define( 'NONCE_SALT',       'j/1u0L!zzr?.<[k|(Jp`%M=Yx|wcI^1t]Rv!98e3LH)j[IY-Y1l#MIh$6@ 3{5!%' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
