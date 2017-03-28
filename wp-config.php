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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'NWzyMgP%cu]:.WCpA|8~=};#94{2Gp+MIY.IP>A[ixr5/BqYD /kpKd[P.^-cDID');
define('SECURE_AUTH_KEY',  '?bz735DsumdC&~WuS=XxF:h6%l|T#}WJ1):EPK;D5DJd{S;8,,$IIFwroOiGY6C[');
define('LOGGED_IN_KEY',    'Pa*0k<{,#Mx76G-9;O-e]Sn&,5m~ovMd&U>i GI787bRAr6{a5QR3E9z!Q4kwenm');
define('NONCE_KEY',        'Qw3qKKZ.5=w(o|aK;yvhp pA]alHyFFclg5mgvC2W?h<C~J7C`%o/2iLNEDF`J3P');
define('AUTH_SALT',        'Egl~*5dT`muUm(PAY~l>GqIFPV-@Rk!m]Vs(;9}eL$g,[oEyckM>9a@V~$xP+{dt');
define('SECURE_AUTH_SALT', '2jt}Q0>[VH(37]pNGg8-|Hy7rS8o@t-ZQvEFD`b9sUF&=:],@ffW*dV0uyiJ)v:8');
define('LOGGED_IN_SALT',   'yB,<u-$?kIk}H?0nG4)Z]j-R42y>a.5g~1(16OcZ2s&LdqgdRekoMNBglmt&NX=d');
define('NONCE_SALT',       'JkiT!W7(5!l3%AKxYnu}+Ux`MQ?F^*$?[{bh2 L8v` P(4-6E(H%`&;KkHHy9pmT');

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
