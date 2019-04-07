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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kolkataboombox_db' );

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
define( 'AUTH_KEY',         'u~QTh/S.ywknkvE=E0[FmYxj)5,N$~#o$a0%lsm>SB~6dx&[XbG9)c ;ycOB>X20' );
define( 'SECURE_AUTH_KEY',  '-b*}8!0DkW:_?ej6hW%k4Ndmxac8jk/dNpX,pR;Z:H-7]1/YknSWs @7!>@wQz~E' );
define( 'LOGGED_IN_KEY',    'aE_/WvAA#RwKu-7$l/y7oM,<t|(@-HC T Ni,,J%YE+aQ&U$z^w~0|MOIxemTEXO' );
define( 'NONCE_KEY',        'ZF;4qSSX>ZM5(S:aVpk*V;x3<6@WeADsg.d }w>`1t:N/CDJX*S4;EN0Njr8].+k' );
define( 'AUTH_SALT',        'q6:.-MTasf_|,0yc+43^8e-naXeVHcQJ|?a:?]B-CK[!nPXpJ)=_yan1/5Oc7mWQ' );
define( 'SECURE_AUTH_SALT', ';AT1Q;9IcNQi|ZgMrW3$<Q#^sql]_J+xFj;N,}$dBt3oel5^4rw.=ZbD0U13g=Jh' );
define( 'LOGGED_IN_SALT',   'XQSp6Y4;thE_3hf@ava3t2g]L:@N?/JjZIHKY9a!tI8[v;NBwQ$UFJ lk<4OE]n-' );
define( 'NONCE_SALT',       't8R&a-3UbN@]_&uQZH-[Y1WDx/5qK6_FO|~K]rCZ,&@5=(btyz*g=YPRd_pFS%r4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
