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

define('DB_NAME', '');


/** MySQL database username */

define('DB_USER', '');


/** MySQL database password */

define('DB_PASSWORD', '');


/** MySQL hostname */

define('DB_HOST', '');


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

define('AUTH_KEY',         'Iu[L*&!)$`!)=w${+#Liup_+gu6=g>I<XY]/4kb:0.yS(!9jcHK+a,%e#V](91}_');

define('SECURE_AUTH_KEY',  ':de(qf`5#DDq+KozHiz0:2,V6DQl|rOj1XggY{:xG8+PGtC>n^{vP-mEE~w7i[{Y');

define('LOGGED_IN_KEY',    'L&P?8*k-K4nMkxIxg8+5d6`)(0zs+)!Bg}8:{Wot+Jb(bTcA7BkzuBC?^+MRy58^');

define('NONCE_KEY',        'y`sz*[y$-I+UyS]-KYwxo&On(Gc2f*5wM<%}0*c+Ts/_-!|`A^G|!O7myp-BX3%0');

define('AUTH_SALT',        'd[~iZqR/3;r)!k5hY?B]1MC|:eNfuEnU.DNbR?|yq??5 Qe3$Ju_6X/##||+7Tp7');

define('SECURE_AUTH_SALT', 'h|ie?xc8+20|Z2ApcywuI$D<22z6~:cuj/8xtD]}|P)&bM^EkBc;/o#WjdDmI|l4');

define('LOGGED_IN_SALT',   'hs! XSrx9gu:t*YSS-Bo$Ho?g*:Y{U}+U{p?`71%V^;9 ]5q|fRJ3;~+n/.<$k%e');

define('NONCE_SALT',       '-!$YCeFi3|0f+Wp[N6W2mES^I/d#u]<7y<u%WuJ60}I+TjhNvd?+b7}6BtFtxA`-');

/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'fddb_';


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

