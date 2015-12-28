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
define('DB_NAME', 'phim_online');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aVG2=q]f1Hz2HWP~vJ32^9+{Qj/vp+|O|.ZR]MgRY]<P->/)VkU-U)[iEgju<L/Q');
define('SECURE_AUTH_KEY',  'aAKi(]Fcw$@N35T?k:~mrP@@+w+-=D JP>c2XDM6dX`!plN/{ S??Uuz5H*I-1:v');
define('LOGGED_IN_KEY',    '[+MOHpF~2inZFV`EWK;H+W9Z<g)YDGzv2Od_84S+x.UKcH:kfMv^~|F]0zOG(QZN');
define('NONCE_KEY',        '|*kaD;z~|,oQP0)641=7--|9*LOXK7vl?)m[W7mq/{]O&KI#6H`hah:Mg+RP/|Yi');
define('AUTH_SALT',        ' rQDD|^G`c3N-(!x<0g]+}=,U/3o:(qNPg46[FH|dz64%9alGntur^5~GJhXU4mX');
define('SECURE_AUTH_SALT', ':&D@.(N,.WCJ^~oiCJ^vxh^c*-,~79fOF|8+/fz.u|=L;Y&u CuOpye)#.E{#~:G');
define('LOGGED_IN_SALT',   'm<#v=FygY.!v,tY_,%8@{yzyFdPgpU#Lebysh@g?-rC7-WFw`<0;-tWDGlLo+wzR');
define('NONCE_SALT',       'h}D>.Lo?/)WpT7jj3cV#E<fCfv&Q..I$B-FnuGYX;T+J0jO<KP*#Zx:R+PC>EVz4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
