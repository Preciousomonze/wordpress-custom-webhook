<?php
/**
 * Plugin Name: WordPress Custom Webhook
 * Plugin URI: https://github.com/Preciousomonze/wordpress-custom-webhook
 * Description: Helps create the webhook url and also handling whatever is sent to the url :)
 * Author: Precious Omonzejele (Code Explorer)
 * Author URI: https://codeexplorer.ninja
 * Version: 1.0.0
 * Requires at least: 4.9.0
 * Tested up to: 5.2
 * License: GPLv3 or later
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Pekky_WP_Webhook' ) ) {
    
    class Pekky_WP_Webhook {

    	private static $_instance = null;
        
        // These paramaters are for custom webhook
		//your url will look like https://site.com/pekky-api/pekky_webhook
		// network_site_url( self::$webhook . DIRECTORY_SEPARATOR . self::$webhook_tag ); //this helps return the full url
   
		/**
		 * Parent wekbhook
		 * replace with a unique value you want
		 * 
		 * @var string
		 */
        private static $webhook = 'pekky-api';
		
		/**
		 * webhook tag
		 * replace with a unique value you want
		 * 
		 * @var string
		 */
        private static $webhook_tag = 'pekky_webhook';

		/**
		 * ini prefix, leave as it is :)
		 * 
		 * @var string
		 */
        private static $ini_hook_prefix = 'pekky_';

		/**
		 * Action to be triggered when the url is loaded
		 * replace with a unique value you want
		 * 
		 * @var string
		 */
        private static $webhook_action = 'hook_action';
		
		/**
		 * Construdor :)
		 */
        public function __construct() {
        	add_action( 'init', array( $this, 'setup' ) );
            add_action( 'parse_request', array( $this, 'parse_request' ) );            
            add_action( self::$ini_hook_prefix.self::$webhook_action, array( $this, 'webhook_handler' ) );
        }

        public function setup() {
            $this->add_rewrite_rules_tags();
            $this->add_rewrite_rules();
        }

		/**
         * Handles the HTTP Request sent to your site's webhook
         */
        public function webhook_handler() {

            $input = $_POST;
			//start your payload processing here

        }

        public function parse_request( &$wp ) {
			$ini = self::$ini_hook_prefix;
            if( array_key_exists( self::$webhook_tag, $wp->query_vars ) ) {                
                do_action( $ini.self::$webhook_action );
                die(0);
            }

        }

        protected function add_rewrite_rules_tags() {
        	add_rewrite_tag( '%' . self::$webhook_tag . '%', '([^&]+)' );
        }

        protected function add_rewrite_rules() {
            add_rewrite_rule( '^' . self::$webhook . '/([^/]*)/?', 'index.php?' .  self::$webhook_tag . '=$matches[1]', 'top' );
        }
    }
}
new Pekky_WP_Webhook();
