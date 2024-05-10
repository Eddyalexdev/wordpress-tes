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
define( 'DB_NAME', 'wptst' );

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
define( 'AUTH_KEY',         'Xh>$&0UNGXD&.Q3h2oOKW7C4,A7lW5QLn&2sF,8l,Zf51/Pl78;_LorG@B*XM3+j' );
define( 'SECURE_AUTH_KEY',  'IfBN3i!+^!nT83;<Ve2t. iJxjVy@CKVK+{EvZ/{2T2r$9LFYEe%<=i98>caYkGU' );
define( 'LOGGED_IN_KEY',    '3NfOQ-?IOLi?_zCuCxP|zs||:m0x:@SP9u|.Pc!B3oRYjs5mSZ rC|qa q_<])iS' );
define( 'NONCE_KEY',        'a.ttZ1F>h)wS[7iz5~r=YVs~W;acuXx]O-r${TPuain`)AuBZKq*UGbWKD9wS!x3' );
define( 'AUTH_SALT',        '4ZLN:gE=w+^TC&&9?Z1VAQ8~yJK<V$vk-)-ILL9!tv pq5lQIvw)h7qam?|D7F2L' );
define( 'SECURE_AUTH_SALT', 'p7v9=iAD/5@^HaNN})W9?_%y;;nbFtc-hNk-/p]x{o+SI(W8Dm6R0R>YowfS)}sl' );
define( 'LOGGED_IN_SALT',   'piGNA.OQNq@K#7U KLG790-@*D.9od -$uHpsl!I<uPN`~x$Eb:+qmR]_*)i_NFm' );
define( 'NONCE_SALT',       'SAY|Tt7y?r] Bu6 &:Rm5zu{PkeE|2v7,u1y69o+ Th-)5k>F/Qn]VG2w7h ]o#G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptst_';

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
