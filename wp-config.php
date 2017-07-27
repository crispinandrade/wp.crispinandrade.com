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
define('DB_NAME', 'crispina_wp31');

/** MySQL database username */
define('DB_USER', 'crispina_wp31');

/** MySQL database password */
define('DB_PASSWORD', '3@6p4S596(');

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
define('AUTH_KEY',         'cy79oxfz5r9agz6cz1ymrmuhnmxhwarmicqlxgboy4820sgasagy8aiqoahwrau2');
define('SECURE_AUTH_KEY',  'z0iwzfz3a1jd1bypp1dpgwlkeyekksukrjnhgwn0fae7xmzauylukhinpb2z3cf6');
define('LOGGED_IN_KEY',    'oq768xlgu3hbrtnebfyvoo61liijizkipvk1hgri7hjzqnn3gpn3gkomjhyzra2y');
define('NONCE_KEY',        'ltofizf4biiwlvunrh6wqrdcutgfrywatoin54mnv1v393y0rm8g3uffkesanihf');
define('AUTH_SALT',        'h0h8zhtytzsjhcafpwkvwkipf2s5ls0lm66njno4hjztvxgqcy5jrdfifwqdbjcs');
define('SECURE_AUTH_SALT', 'p2mzm3pcpjhdh1i0mulfjgxte1zziddqhuz3ivsmjcbkb4w90d8ovdpugqooqjps');
define('LOGGED_IN_SALT',   'ypgxphkvarus12pfmvbo2roh8qhnkbqh4yuntsmx2xnhh7fmzbxfeiariutwzqkv');
define('NONCE_SALT',       '6yzyrzwa3ee9lletmttq7jk4wwdabcphnnx8sx9m4o8640fxnyjvgobjdobddkqr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptp_';

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
