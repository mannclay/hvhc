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
define('DB_NAME', 'hvhc_db');

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
define('AUTH_KEY',         'ynt$+Uv$n@%EnoOctErk`!vJuA6Sf+1Gga4*!]NfuLk{j8>NR1QPQ})N?%i >g&4');
define('SECURE_AUTH_KEY',  'ehEXl{NEhPmLZ;gV(ATmI@L[tW:Off7~|6k?zA<Rxa8H!_ EX|{>Xj=?PuMv!W(G');
define('LOGGED_IN_KEY',    ',w:)Ms!n`r986Hx:1cFf[~t?_kh>3XhBO|)~}EIX,y]-tuVV}C)>1NuCr{i#}.(A');
define('NONCE_KEY',        'L!75yBF}(s9#RNGf%Mo|+7nVB>[~cPgKC#$M~kb-t`SbYfr9A/(Fk>8lJd=bl)>F');
define('AUTH_SALT',        ':A3 z2NqzH=UW{e[&tM)HCITS^_/lYv)jzL`-BA.Ye&a&d2 *%3tcfPbNydr&3F]');
define('SECURE_AUTH_SALT', '$~ehVhg<$wY3nlQ4sNAn=Q0d&5cV+tcy }=+q,?PFd|1[ 1aJQ&>*^[c?DTLrU*_');
define('LOGGED_IN_SALT',   'x K%KZ/sLLO&A7}Yk:Ze6%)hiO%w#qbx%3A)1y5$q>pk?F8>]0LZAjtLL<r-51?}');
define('NONCE_SALT',       'p`C*oXtbsvo3$osGyJKojBi.40 8$&w&L.*OSx^.^.g2o|5YoNszc$h3wx52bpB#');

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
