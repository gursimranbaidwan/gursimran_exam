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
define('DB_NAME', 'gg-starter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dv6a|#XYe|GiMK-P6>RtItD=YHI&-_cp4g@CW %8/$Y@vKW*pGmCi+b2ol)5r] T');
define('SECURE_AUTH_KEY',  '8%#JR.v``FKuAJ;CFV3yulIF6e{<7Sv=ch~}TS]>O/(?|k6v7BfBi@M<N?^ytoTd');
define('LOGGED_IN_KEY',    'kVA2cY8am>!hV{||2E9Nd0&$5=GoNqSAz!vmHWzyq7$32{eCW)GMwe^JUHhFNS3O');
define('NONCE_KEY',        '2yk&G364@-;a}r}O{l$q/k&SjNOY7V{V!;EVFSnR*g@2D@t6k+{z9g:>xv7 n *;');
define('AUTH_SALT',        'LrY3Z}}|+[IbKqjoUJMS9F8UiE]L.FjPLyQ=RWc+BIrnR{?TCB9P:K;SGR.hO>dV');
define('SECURE_AUTH_SALT', '}8aO-?zsdeQx8hxohqbF4R2NmR<QRF+*B3sy[;>!0~?*hs)t{U]i%]]IB:s%+Pn)');
define('LOGGED_IN_SALT',   ':U*RN^RQ1QVT`h_wqC7zSB,y9`SE%A*c.y$u0V7{)K0[Oge>+)EXa&i8/W8@*Bv8');
define('NONCE_SALT',       'z^I`i*C+cUe| <>F],1qPt(f*.1);hH&p#f))W?5)g%%r0k|,lsc{;kr_aVY)XPP');

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
