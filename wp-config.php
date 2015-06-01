<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpquery');

/** MySQL database username */
define('DB_USER', 'dengri');

/** MySQL database password */
define('DB_PASSWORD', 'qxwv35azsc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '2IqrOcQA*Jt;<09jd+hB{sJ*F,SQk_8ZWl?YzExy{y?PZ+=1Ir|Z$JJjIKW%<?pz');
define('SECURE_AUTH_KEY',  'U^mQoA>1A;9Rx|Y{t]`w+VqZtexC8yB%t(y(|W#N%OOA_GEg7SUwy;(--=h#|e-f');
define('LOGGED_IN_KEY',    '!QK+Lg.%+FA`vx{6^Gs.6FS,H78_+Ah]/Q@)+|xhpre0V`?fob{,~.kX9L#P3c<N');
define('NONCE_KEY',        '9D$d1_4FhVDfP%+/Ew<J+gr{[z9%S3F}gkmGwjH-`)LTWl}^g&B7^xB|r|n9#{?#');
define('AUTH_SALT',        'R:2A+sFDhpTBvRTXhdNV)^[/yGy@z+*Pf`{F_p)-cnM`+i;-;nV.*KG6J4]r<5I-');
define('SECURE_AUTH_SALT', 'f}dZ/Bz>rX9>R|t8-+8sE!$#mdv6EV6 NO:~*0xp)}gq}|#vUc[Y#b<np6_klg|t');
define('LOGGED_IN_SALT',   '~tKyuv3A!Mxtn-HN(:T.[{GN3{ NwEMqMsxrpbPxo>~7;r)A~nFtWmyW<hw1  [Q');
define('NONCE_SALT',       'JFtqczz_0lz9=t<iVK88+Foq*.=kE;>Kl32~74VvMY}x..k >*+1RN5{fz<eg,$]');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
