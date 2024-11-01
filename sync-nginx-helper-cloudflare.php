<?php
/**
* Plugin Name: Sync Nginx Helper with Cloudflare
* Description: Automatically purge Cloudflare cache whenever Nginx Helper purges cache.
* Version: 1.0.2
* Author: RelyWP
* Author URI: www.relywp.com
* License: GPLv3 or later
* Text Domain: sync-nginx-helper-cloudflare
*/

if (function_exists('is_plugin_active')) {
	if( is_plugin_active( 'cloudflare/cloudflare.php' ) && is_plugin_active( 'nginx-helper/nginx-helper.php' ) ) {
		
		add_action('rt_nginx_helper_after_fastcgi_purge_all', 'nginx_helper_cf_sync_all');
		add_action('rt_nginx_helper_after_redis_purge_all', 'nginx_helper_cf_sync_all');
		function nginx_helper_cf_sync_all() {
			
			$cloudflareHooks = new \CF\WordPress\Hooks();
			$cloudflareHooks->purgeCacheEverything();
			
		}

		add_filter('rt_nginx_helper_purge_url', 'nginx_helper_cf_sync_page');
		function nginx_helper_cf_sync_page($url) {
			
			if($url) {
				
				$post_id = url_to_postid($url);

				if ($post_id) {
					$cloudflareHooks = new \CF\WordPress\Hooks();
					$cloudflareHooks->purgeCacheByRelevantURLs($post_id);
				}
				
			}

			return $url;
			
		}

	}
}