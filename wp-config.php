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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

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
define('AUTH_KEY',         'wIx6-El;I Eh%<X?%G!N+Iam-@qH0~#Gg-bhU&0?1qnjO;tB<g5DIqfw7fMq%8c|');
define('SECURE_AUTH_KEY',  '-0^;G/Czg18T~~?{,?B<d+0fmHT{-$!#oa!ie=P [b EB-EoE7r<0h]>.M^Iv0jb');
define('LOGGED_IN_KEY',    'd+zq-5bI+DP.K#tn8BZ<.Ila(-0n,mfP,=!?K<AYkdi}^!-!-Act;b|Y:ql(g#$;');
define('NONCE_KEY',        '5fYkWzl<jXn)Gq1]+ojdqIU[L1SV2inI6HxheR_Z)+Q-uuHN2iX%m,G)(]5B8K}h');
define('AUTH_SALT',        'nlj`ew_h#q3RbB}}K,j-UDDRGU/W2vdzQKaK3n ZtE8n-U+)t-$S! ND|?a}ZeXN');
define('SECURE_AUTH_SALT', ' _c7FBJ8Rhm2<Id%-7+RQbY#X~Tz5|zg6FmN,Q[!I7Vc~KB=>/oVlm+b]~jm&ys|');
define('LOGGED_IN_SALT',   'sK8d]:h<U9#59YXk#B9%r<,H9fQ;s?oir4 yia6aac|#29~qI|oKTBw-{-NM./,,');
define('NONCE_SALT',       'qPP!:1<w.U7D}Ech%|_HQL}P=3^8st|j:B+<+=K`a#L{)@PW)li4C#ZmO-3e$Z%5');

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
