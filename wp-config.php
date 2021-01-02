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
define( 'DB_NAME', 'pDNOdoAiUjZ1cD' );

/** MySQL database username */
define( 'DB_USER', 'pDNOdoAiUjZ1cD' );

/** MySQL database password */
define( 'DB_PASSWORD', '6mx6OoOQgEEdHD' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'P>^]>%cuN%<KI,>=N)g.D}5yK7z9ms.PZ`WX%_j4.:<Cv*2Wjg**FX]K:Z>/3=?%' );
define( 'SECURE_AUTH_KEY',   'Us1:<*PP&QSPPhe7](SNt*CNoVAJjqGsFwiEb>E BeNXyrLFpT3aW01wBQd%WmQb' );
define( 'LOGGED_IN_KEY',     '@}FOD}})1~_wl]jYk(]EP#W cZ%f}R`1#@/-nFN|(7e,gb>PHRCgkl&fha_3F Q%' );
define( 'NONCE_KEY',         ',&D+_Q^Mb8@rcngwe&%cclv_RX(Yn6z`:YX]NS?2IwaQ{7S. 5b,3&%->XxLM|<q' );
define( 'AUTH_SALT',         '<C%<NNTp^rnabjccj{m6Y@C0RV#-M,eCOi.R<75OM=b+|/JgZ`;5rvvgr<fOre4X' );
define( 'SECURE_AUTH_SALT',  'Q]0y!p0Ja,vlq n}xG6PVjUg[,%AUQEbp<p.,p1y-Vj4b4z8XSkqT6XO2buBT7KW' );
define( 'LOGGED_IN_SALT',    'bvC}r,Og]sC9RTDTtX9Q)2FqyiH:du-r6QJ^:GOrTC(7%4_2d}=NxUj];(oV7_e5' );
define( 'NONCE_SALT',        'r]&Gqd.%CP03C%[9/>4Q+t`,WI4pDUf3 ZS7#yWS4G,Rs%jwfjw6?DD(=8MAkd4a' );
define( 'WP_CACHE_KEY_SALT', 'o1-;3kop7)mCrFBV}v>5^3k=cZrZ[_AET/Z`H,1S`Rd>]xkzJ/X=[O{<?w`!d#Jh' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
