<?php
/**
 * Constants used by this plugin
 * 
 * @package SendX
 * @author Team SendX <hello@sendx.io>
 * @version 1.0.0
 * @since 1.0.0
 */

// The current version of this plugin
if( !defined( 'WP_SENDX_VERSION' ) ) define( 'WP_SENDX_VERSION', '1.0.0' );

// The directory the plugin resides in
if( !defined( 'WP_SENDX_DIRNAME' ) ) define( 'WP_SENDX_DIRNAME', dirname( dirname( __FILE__ ) ) );

// The URL path of this plugin
if( !defined( 'WP_SENDX_URLPATH' ) ) define( 'WP_SENDX_URLPATH', WP_PLUGIN_URL . "/" . plugin_basename( WP_SENDX_DIRNAME ) );