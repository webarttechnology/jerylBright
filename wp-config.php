<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

// define( 'DB_NAME', 'webbersunited_jerylbrightold_db' );
define( 'DB_NAME', 'jerylbright' );



/** Database username */

define( 'DB_USER', 'root' );



/** Database password */

define( 'DB_PASSWORD', '' );



/** Database hostname */

define( 'DB_HOST', 'localhost' );



/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );



/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );



/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'u!u6U|>_qwsXmVaezVY0ehC0|d_$qecA`+LI+C)tAH6+8|L9$0bbIq#,l+/emq.n' );

define( 'SECURE_AUTH_KEY',  'qu4O=jul_Z%1CQqQKH~;3FAW9Vm&{,/gCWSg#Bkn0Z3qGBEL*MiTFlas?ogcVhkx' );

define( 'LOGGED_IN_KEY',    '$7mzDv`]zU8I@3-MAS_d-bZGj]A3`t1aToe{tEW+H7aq2R.l-OjmH6V3 Zw7K@~N' );

define( 'NONCE_KEY',        'U$y+K]Gz`Ju`|k6%/#cx9?q]bJ,Prk}}Z70^4+fP^#]r+IV- nmdM0D2lX)(3oJ}' );

define( 'AUTH_SALT',        'bgwh-j/<7e+HOi.q{C|EoC>@ysqxvU[*{Px!pd3z9H;l)]yJZr/*3T}+ur3Td{_2' );

define( 'SECURE_AUTH_SALT', 'unjnf#jQc-:9+<^QL0jCV:pF$?s[@S#Ann<ios8#A[!FOmQ.yNxIjqejs7Z/?;`T' );

define( 'LOGGED_IN_SALT',   '2phZ5o`g*q`VuZ.b0Lx$=#7W+T]npt2Zi8m^rgzt:ue&lhSg?1=auIEo}L[oofsK' );

define( 'NONCE_SALT',       '`3orn[m*qm4 (g%s#u5<snS&Bv<kT%g!866d5]6s/@Z+#uBuHl!beotsytEBbfkX' );



/**#@-*/



/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG',false );
//define( 'WP_DEBUG', true );



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

