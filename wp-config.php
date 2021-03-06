<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'wordpress' );
	define( 'DB_USER', 'wp_user' );
	define( 'DB_PASSWORD', 'Whysoserious123' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

define('WP_MEMORY_LIMIT', '96M');

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'M/ZT]^3~.SGmd+0xl35e+@w]&z-zI4,;8/IwF^Tv/aJ[%D~E3TOLvf5G:N|6JQx&');
define('SECURE_AUTH_KEY',  '>h-+J:/HHh)|Rw_hWrg@=e&)~^zLGX*PG4&.y6.jHIG*3SGI%&:mM*e3>zwI:RLC');
define('LOGGED_IN_KEY',    'zk{2D0hd_@#,=-z$lejA`ZK R>M]+-AXdh/FlRbn&/*Ncm?^5=WsEzIm}T/V?ZRL');
define('NONCE_KEY',        'umhrMZ2Sc^SAB3daEpY>#|6.J.Sf +r4rxiseT+Z?ElKHIMWb={9k. STyqo<m2V');
define('AUTH_SALT',        '51 9w,>LPHjXh.Zd*}vu^KKnuo]/hw`ezAac>Y-lgQ?#$<J>T}WLUJKJibu3#U# ');
define('SECURE_AUTH_SALT', 'OetoS:UpWD|Y=} o9JOF:IDZ){-02*g5>b`+te0yT`sciIq_?gjJXBb<HtE+Q5kv');
define('LOGGED_IN_SALT',   ']go{ohB];aR;+9dJl{DZS~P:0+$(pD[=o(QF3+2{c|`t#6?~76g#y9/~]:-&1}?X');
define('NONCE_SALT',       'Z!?z^X~NNEI[g[X{L@WN;/YUjR*aCn!zeZLg<t?I;]`W(s$kP[&&*=+5$[ueLE?.');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
