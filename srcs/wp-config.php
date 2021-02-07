<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'kgale' );
define( 'DB_PASSWORD', 'pass' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         '/`-d|><E@f`u,iTid[^(k`8,cNN&_<gjp>|r{Z*2y#&|?z]#m<gj+#.@3M{vEUPE');
	define('SECURE_AUTH_KEY',  '+^tWtO|BB~/+;4eZSwF6%-x+.Cb@[`EQq^~.1r^9Lf5K,,UCjCB1)UvcIeE4OK/y');
	define('LOGGED_IN_KEY',    'J1~MzN2-r)4lBeW#bw{XNjiV*:2Av5qUx&q?Xqcfi!HFTvM--peWOz6SB+q]&j9&');
	define('NONCE_KEY',        '*-U]+3#R2KxS>I1</bI_Y*J;{t<IiBg]4qaI)(U4;DIYXkNi#D7coG(@O!*iBlh<');
	define('AUTH_SALT',        '|n&>L;Q-+Wzq3372O~~gQ30<Q,E~|{$85W]iN$++S]*WJF.tTFAOF+W>mDE;-8(;');
	define('SECURE_AUTH_SALT', '1?h+?z0Wfms&z)V6Gba|c_|RT>!DgVCs.N+eMO9yT|b{-kD|eumv-Wis:=`aLDZ#');
	define('LOGGED_IN_SALT',   'f9W<q@f}raQ!w++7(f74{B&x,Jrmy+U8|HV&5E,WrW27|h($D#/:M8EFV|c2M)(q');
	define('NONCE_SALT',       'C:lGlB8$R e4P7GM|qojT-+?9F>^X;T&`+h2XF!%`(vm+7bm0^KkYFFQ$Tp59eQ}');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');