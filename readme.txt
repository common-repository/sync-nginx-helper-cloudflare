=== Sync Nginx Helper with Cloudflare ===
Contributors: RelyWP
Tags: nginx,helper,cloudflare
Tested up to: 6.0.0
Stable Tag: 1.0.2
License: GPLv3 or later.
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Automatically purge Cloudflare cache whenever Nginx Helper purges cache.

== Description ==

Automatically purges your Cloudflare cache whenever cache is cleared via the Nginx Helper plugin.

* The full Cloudflare cache is purged if the Nginx Helper "Purge Cache" button is clicked.

* If cache is purged for an individual page via Nginx Helper, then it will also only purge the Cloudflare cache for that page.

Requires the following plugins to be installed & setup:

* [Nginx Helper](https://wordpress.org/plugins/nginx-helper)

* [Cloudflare](https://wordpress.org/plugins/cloudflare)

== Installation ==

1. Upload the 'nginx-helper-cloudflare-sync' plugin to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Make sure you have installed and setup both the "Nginx Helper" and "Cloudflare" plugins.
4. That's it, whenever you clear cache in "Nginx Helper", it will also clear your "Cloudflare" cache!