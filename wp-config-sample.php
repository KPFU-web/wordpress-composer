<?php

/** Authentication unique keys and salts. **/
define( 'AUTH_KEY', '' );
define( 'SECURE_AUTH_KEY', '' );
define( 'LOGGED_IN_KEY', '' );
define( 'NONCE_KEY', '' );
define( 'AUTH_SALT', '' );
define( 'SECURE_AUTH_SALT', '' );
define( 'LOGGED_IN_SALT', '' );
define( 'NONCE_SALT', '' );

// ** MySQL ** //
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

$table_prefix = 'gt_';

// ** URL and folders ** //
define( 'PROTOCOL', 'https://' );
define( 'DOMAIN_NAME', $_SERVER['HTTP_HOST'] );
define( 'WP_HOME', PROTOCOL . DOMAIN_NAME );
define( 'PATH_TO_WP', '/core' ); // if your WordPress is in a subdirectory.
define( 'WP_SITEURL', WP_HOME . PATH_TO_WP ); // root of your WordPress install

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/content' );

define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content/plugins' );
define( 'WP_PLUGIN_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/content/plugins' );


/**  For developers: WordPress debugging mode. **/
define( 'WP_POST_REVISIONS', FALSE );
// !Important - CRON disabled need new cron
define( 'DISABLE_WP_CRON', TRUE );
define( 'AUTOSAVE_INTERVAL', 180 ); 

define( 'WP_DEBUG', TRUE );
define( 'WP_DEBUG_LOG', FALSE );
define( 'WP_DEBUG_DISPLAY', TRUE );
define( 'SCRIPT_DEBUG', true ); // For gutenberg
define( 'SAVEQUERIES', true );
 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the CMS directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up CMS vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
