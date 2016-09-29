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

// https://codex.wordpress.org/Changing_The_Site_URL
define('WP_HOME','http://0.0.0.0');
define('WP_SITEURL','http://0.0.0.0');

// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('DB_NAME', 'wordpress');



/** MySQL database username */

define('DB_USER', 'root');



/** MySQL database password */

define('DB_PASSWORD', 'wordpress');



/** MySQL hostname */

define('DB_HOST', 'db:3306');



/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');



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

define('AUTH_KEY',         'N/uJ?#EO3IYb)8x%lg`.N4Zy<?E.v|h#/@0*iiUzREhSV<a{-afvPKdd^Oy[oB^a');

define('SECURE_AUTH_KEY',  'YXK6A&j%<2^Yg2=%jNh/{F#}D6::6&0%J,@V52FC*CP}}^TUYzBlI,S|srNet%N}');

define('LOGGED_IN_KEY',    'Wxf}:pI*tx/r(O)q.3MC3OyF`_<n*emdru Q.R{^+vs?f =bfc,6&FnEo2a?:k$Q');

define('NONCE_KEY',        'e,!k-Zmvu8lPkS/[-~!Tcx~4_~U`^M~q~qf|]sY+}Rao_Rg9iq#jH_>m$T45:mPQ');

define('AUTH_SALT',        'zlc|p<.*-]aFO+y#0N<@6BK@PvETh4=H. rXA+3U5kX3{lhI@2B;(E*ooYc}.K22');

define('SECURE_AUTH_SALT', 'SRQMKAGRE`u4#wp}z|*HO[dY9<o%71A6OD*=a%2N$`P77yTnwngtO:;ok-&D=S^d');

define('LOGGED_IN_SALT',   '4G`Y>}{f#d$d/SkNmS@^9!T$@~_2]*XE;%g0w]a]@XXc`sfQ?Lb^`j)RISbk^JZM');

define('NONCE_SALT',       '7~oy|K.z#uKbG*e[{G{kB:,0qVIu#7,VCkyq 1;<H-ZjsJDBZ*!wGQ,~QTnLD)lp');



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



// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');
