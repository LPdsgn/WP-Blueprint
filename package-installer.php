<?php
/**
 * Package Instaler plugin.
 *
 * Example plugin to demonstrate the ability to handle bundled plugins with the
 * TGM Plugin Activation library.
 *
 * @package     WordPress\Plugins\Package Installer
 * @author      Luigi Pedata <luigi@lpdsgn.it>
 * @link        https://lpdsgn.it/
 * @version     1.1.1
 * @copyright   2023 LPdsgn a.k.a. Luigi Pedata
 * @license     http://creativecommons.org/licenses/GPL/3.0/ GNU General Public License, version 3 or higher
 *
 * @wordpress-plugin
 * Plugin Name: Package Installer
 * Plugin URI:  http://lpdsgn.it/
 * Description: Questo mi serve per installare velocemente tutti i plugin che uso spesso.
 * Author:      Luigi Pedata
 * Author URI:  http://lpdsgn.it/
 * Version:     1.1.1
 * Text Domain: Package
 * Domain Path: /languages
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Avoid direct calls to this file.
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

if ( ! function_exists( 'package_register_required_plugins' ) ) {

	add_action( 'tgmpa_register', 'package_register_required_plugins', 9 );

	/**
	 * Register the required plugins for this install.
	 *
	 * @since 1.0.0
	 */
	function package_register_required_plugins() {
        
		$plugins = array(
            
            // External source plugins
            array(
                'name'         => 'Duplicator Pro', // The plugin name.
                'slug'         => 'duplicator-pro', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/duplicator-pro-4583.zip', // The plugin source.
                'required'     => true, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'FileBird', // The plugin name.
                'slug'         => 'filebird-pro', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/filebird-pro-508.zip', // The plugin source.
                'required'     => true, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'FormCraft', // The plugin name.
                'slug'         => 'formcraft3', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/formcraft3.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Forminator Pro', // The plugin name.
                'slug'         => 'forminator', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/forminator1231.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'All in One SEO Pro', // The plugin name.
                'slug'         => 'all-in-one-seo-pack-pro', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/all-in-one-seo-pack-pro.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Image SEO', // The plugin name.
                'slug'         => 'aioseo-image-seo', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-image-seo.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - IndexNow', // The plugin name.
                'slug'         => 'aioseo-index-now', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-index-now.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Link Assistant', // The plugin name.
                'slug'         => 'aioseo-link-assistant', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-link-assistant.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Local Business', // The plugin name.
                'slug'         => 'aioseo-local-business', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-local-business.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - News Sitemap', // The plugin name.
                'slug'         => 'aioseo-news-sitemap', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-news-sitemap.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Redirects', // The plugin name.
                'slug'         => 'aioseo-redirects', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-redirects.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - REST API', // The plugin name.
                'slug'         => 'aioseo-rest-api', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-rest-api.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Video Sitemap', // The plugin name.
                'slug'         => 'aioseo-video-sitemap', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/aioseo-video-sitemap.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Rank Math SEO', // The plugin name.
                'slug'         => 'seo-by-rank-math', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/seo-by-rank-math.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Rank Math SEO Pro', // The plugin name.
                'slug'         => 'seo-by-rank-math-pro', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/seo-by-rank-math-pro.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Code Snippets Pro', // The plugin name.
                'slug'         => 'code-snippets-pro', // The plugin slug (typically the folder name).
                'source'       => plugin_dir_url( __FILE__ ) . 'plugins/code-snippets-pro.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            
            //Wordpress repository plugins
            // List of plugins from the WordPress Plugin Repository.
            array(
                'name'      => 'Converter for Media',
                'slug'      => 'webp-converter-for-media',
                'required'  => true,
            ),
            array(
                'name'      => 'CookieYes | GDPR Cookie Consent',
                'slug'      => 'cookie-law-info',
                'required'  => true,
            ),
            array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => false,
            ),
            array(
                'name'      => 'Disable Gutenberg',
                'slug'      => 'disable-gutenberg',
                'required'  => false,
            ),
            array(
                'name'      => 'Email Encoder - Protect Email Addresses',
                'slug'      => 'email-encoder-bundle',
                'required'  => true,
            ),
            array(
                'name'      => 'Envato Elements',
                'slug'      => 'envato-elements',
                'required'  => false,
            ),
            array(
                'name'      => 'Hide My WP Ghost Lite',
                'slug'      => 'hide-my-wp',
                'required'  => false,
            ),
            array(
                'name'      => 'Instant Images',
                'slug'      => 'instant-images',
                'required'  => false,
            ),
            array(
                'name'      => 'Loco Translate',
                'slug'      => 'loco-translate',
                'required'  => false,
            ),
            array(
                'name'      => 'PixelYourSite',
                'slug'      => 'pixelyoursite',
                'required'  => false,
            ),
            array(
                'name'      => 'Pages with category and tag',
                'slug'      => 'pages-with-category-and-tag',
                'required'  => false,
            ),
            array(
                'name'      => 'Site Kit by Google',
                'slug'      => 'google-site-kit',
                'required'  => false,
            ),
            array(
                'name'      => 'Redirection',
                'slug'      => 'redirection',
                'required'  => false,
            ),
            array(
                'name'      => 'Safe SVG',
                'slug'      => 'safe-svg',
                'required'  => true,
            ),
            array(
                'name'      => 'Simple Page Ordering',
                'slug'      => 'simple-page-ordering',
                'required'  => true,
            ),
            array(
                'name'      => 'WP Mail SMTP',
                'slug'      => 'wp-mail-smtp',
                'required'  => false,
            ),
            array(
                'name'      => 'WP-Sweep',
                'slug'      => 'wp-sweep',
                'required'  => false,
            ),
            array(
                'name'      => 'WPS Hide Login',
                'slug'      => 'wps-hide-login',
                'required'  => false,
            ),
            array(
                'name'      => 'Yoast Duplicate Post',
                'slug'      => 'duplicate-post',
                'required'  => true,
            ),
            
        );
        
        $config = array(
		'id'           => 'Package',                // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => 'plugins',                // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',  // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',         // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => false,                    // Show admin notices or not.
		'dismissable'  => true,                     // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                       // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                     // Automatically activate plugins after installation or not.
		'message'      => 'Have Fun :D',            // Message to output right before the plugins table.
        
        );

	   tgmpa( $plugins, $config );
        }
	}

function disable_plugins_updates($value) {
    $pluginsToDisable = [
        plugin_dir_url(__FILE__) . 'duplicator-pro/duplicator.php',
        plugin_dir_url(__FILE__) . 'plugin-folder/plugin.php'
    ];
    if (isset($value) && is_object($value)) {
        foreach ($pluginsToDisable as $plugin) {
            if (isset($value->response[$plugin])) {
                unset($value->response[$plugin]);
            }
        }
    }
    return $value;
}
add_filter('site_transient_update_plugins', 'disable_plugins_updates');