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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fungambling' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '&Z;mirk;Grc+Az|O)LbiRWNC|r@|.|Znxx0tqlD&A:cepjX4S2ba|c;krZP5>eL~');
define('SECURE_AUTH_KEY',  '0!Yf(`.N}XB!=-hw#knSpU^z/B+rq=+w#*%,58AQ|,|.:v<BP!}-Q>1fS#9S_rl+');
define('LOGGED_IN_KEY',    'ArJWE1-NA.]p-,Dr`i1_9!wdkkZa>RU-I,Pnj0Sh_8Kiw3)U1y?:*?O-X;mYc,s5');
define('NONCE_KEY',        'AmVLKD2+mR^Gokr6O+.j4X4J,]90Ts_9+]3x_(P<vww=PFc]WI[E>-Li/(}NO]WD');
define('AUTH_SALT',        ',aZ`|H!A?kJcs>KO|$l,jT+<JOg!q={>5=y|?QrLQT_YMu;^dBIC7dkBa=]:=JbB');
define('SECURE_AUTH_SALT', 'R*;,B`a3r}#K|OZ|iuGW[Y-sDk_HILJ!$97F&!Xr,,h5dBEpwzi:k5s#3F9|k~:)');
define('LOGGED_IN_SALT',   'T+b`/iyD3UcsYR|89*uBs+AB?Hhs[t9MZ:Lw1/)31&5ji]5*8f|j#GpA4kz+w3xW');
define('NONCE_SALT',       'z8%`KXod.Gl=`G.K]%%|muL@h0}8e.iN+5My|fGLq%Y*CLm;^|U7cKnitCo]]pXL');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
