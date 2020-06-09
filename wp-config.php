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
define( 'DB_NAME', 'wordpress_shapes4life' );

/** MySQL database username */
define( 'DB_USER', 'krijn' );

/** MySQL database password */
define( 'DB_PASSWORD', 'localhosttest' );

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
define( 'AUTH_KEY',         '2$PH2&o{$ nJ+TXjlB  vcE//rhdd3Zx;@Q-,&B@i6e/Mo!Xf;lv3A[u2uH;j>I5' );
define( 'SECURE_AUTH_KEY',  'cf/K[lRM<ec<}_6Qp&~P[kN;k:lNRA{R@D2B,VunO(#8s1IjzAtwUmwb!,W-/j&m' );
define( 'LOGGED_IN_KEY',    '_?6del#&`Y8TZa8cgj$cdyhiDpBZ5qrhEkP8p=HV6+OPZv=GL]e2jC#}R[C6wLVk' );
define( 'NONCE_KEY',        'L%[BZ9s*Z*<rE!_$x<.(cQt8;[lK0bRW,wui:#SX.w7<ROYa/OwDzPRgM}O:ll.p' );
define( 'AUTH_SALT',        '1?a^8gcH&Vr:lPSR=t#O%hN-+:B(5%-Q]kkX&Z/|$hJzM5r+z{t3$ *7{d$M)PmD' );
define( 'SECURE_AUTH_SALT', '|-~}HL6GL&Xw4{#uoGe^r2g7ML5~A!pY:~`{|p)RXFN_cCLjZM5a=50Ct($U7{N4' );
define( 'LOGGED_IN_SALT',   'qXMi>nmo%KxX+Vun`Ua&|)pQG5*RnTVk%79J8AOVr!jDS#N]%camE>Tpd0?prOcT' );
define( 'NONCE_SALT',       'md_>>N;I2Se;X;U!Cu,Y?D5mH^3ZV%uiiBYjYMYF+:8QusMc+|?@)B N{}{BA6AX' );

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
