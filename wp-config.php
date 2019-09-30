<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'wp_atln2' );

/** MySQL database username */
define( 'DB_USER', 'wp_d0ot0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B37N6xMtk0p$CL2g' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '&;r[dv/N8@Kz4tn3u*;C4jM2l6YwE7S1|0K]@404XPpDc+VE-ikn)8;]I[nt#lC6');
define('SECURE_AUTH_KEY', 'DUXWF:x6aX*YE7Z5pzsc(TsNnV~+fXk3%;gOdW;121]l+S5-42tH3gG99@Sm&7_G');
define('LOGGED_IN_KEY', '%;c*UPt(vht*D_t@9G9|E&6Rq0Mk@OiU%t(~_~c9j46-4W%K3|&5J4K5t2&rr*#3');
define('NONCE_KEY', 'biau0]8g(1~O&457Ec2tf29B10|1leZE#6/j4lE2*ip0CFldC0]/M09-Q8J0fQ4C');
define('AUTH_SALT', 'K8b[|QrIW@Zv#6U4iWdRu+Zr5jCse|O5&-q2y[315TX[@*]Tq:)2a)*hh+r4Qyd8');
define('SECURE_AUTH_SALT', '23y;TVM2(m!IF:34T%@s3@rKY4*)@B6M(Cf79AALfg)1Y((e6SAOll#+A)|N_N;4');
define('LOGGED_IN_SALT', '*R6kR119Afqw2(0en:(iX-u@Z7InP3:56V7]]_H]oUa20~)m1W0Q8W6JbL1%+f9Z');
define('NONCE_SALT', '6ep9G:0!HN:Fn1FQ#46q:B-aIr88@rbksj_:C3Pmu8v4t6-p;7ZR(/+KuXh|4GVP');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PIy9A_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
