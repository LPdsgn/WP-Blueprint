<?php
/**
 * Package Installer plugin to handle bundled plugins with the
 * TGM Plugin Activation library
 *
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
**/

// Avoid direct calls to this file.
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

require_once plugin_dir_path(__FILE__) . 'class-tgm-plugin-activation.php';

if (!function_exists('package_register_required_plugins')) {

    add_action('tgmpa_register', 'package_register_required_plugins', 9);

    /**
     * Register the required plugins for this install.
     *
     * @since 1.0.0
     */
    function package_register_required_plugins()
    {

        $plugins = array(

            //Wordpress repository plugins
            // List of plugins from the WordPress Plugin Repository.
            array(
                'name'      => 'Admin and Site Enhancements (ASE)',
                'slug'      => 'admin-site-enhancements',
                'required'  => true,
            ),
            array(
                'name'      => 'Converter for Media',
                'slug'      => 'webp-converter-for-media',
                'required'  => true,
            ),
            array(
                'name'      => 'Complianz',
                'slug'      => 'complianz-gdpr',
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
            array(
                'name'      => 'Wordfence',
                'slug'      => 'wordfence',
                'required'  => true,
            ),

            // External source plugins
            array(
                'name'         => 'All in One SEO Pro', // The plugin name.
                'slug'         => 'all-in-one-seo-pack-pro', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/all-in-one-seo-pack-pro.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/all-in-one-seo-pack-pro.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Image SEO', // The plugin name.
                'slug'         => 'aioseo-image-seo', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-image-seo.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-image-seo.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - IndexNow', // The plugin name.
                'slug'         => 'aioseo-index-now', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-index-now.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-index-now.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Link Assistant', // The plugin name.
                'slug'         => 'aioseo-link-assistant', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-link-assistant.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-link-assistant.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Local Business', // The plugin name.
                'slug'         => 'aioseo-local-business', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-local-business.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-local-business.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - News Sitemap', // The plugin name.
                'slug'         => 'aioseo-news-sitemap', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-news-sitemap.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-news-sitemap.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Redirects', // The plugin name.
                'slug'         => 'aioseo-redirects', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-redirects.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-redirects.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - REST API', // The plugin name.
                'slug'         => 'aioseo-rest-api', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-rest-api.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/aioseo-rest-api.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'AIOSEO - Video Sitemap', // The plugin name.
                'slug'         => 'aioseo-video-sitemap', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/aioseo-video-sitemap.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => '', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Admin Site Enhancements Pro', // The plugin name.
                'slug'         => 'admin-site-enhancements-pro', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/admin-site-enhancements-pro-6.9.7.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/admin-site-enhancements-pro-6.9.7.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Complianz', // The plugin name.
                'slug'         => 'complianz-gdpr-premium', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/complianz-gdpr-premium-7.0.7.zip', // The plugin source.
                'required'     => true, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/complianz-gdpr-premium-7.0.7.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Duplicator Pro', // The plugin name.
                'slug'         => 'duplicator-pro', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/duplicator-pro-4.5.12.zip', // The plugin source.
                'required'     => true, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/duplicator-pro-4.5.12.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'FileBird', // The plugin name.
                'slug'         => 'filebird-pro', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/filebird-pro-558.zip', // The plugin source.
                'required'     => true, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/filebird-pro-558.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'FormCraft', // The plugin name.
                'slug'         => 'formcraft3', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/formcraft3.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/formcraft3.zip', // If set, overrides default API URL and points to an external URL.
            ),
            array(
                'name'         => 'Forminator Pro', // The plugin name.
                'slug'         => 'forminator', // The plugin slug (typically the folder name).
                'source'       => 'https://lpdsgn.it/plugins/forminator-1301.zip', // The plugin source.
                'required'     => false, // If false, the plugin is only 'recommended' instead of required.
                'external_url' => 'https://lpdsgn.it/plugins/forminator-1301.zip', // If set, overrides default API URL and points to an external URL.
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
            'is_automatic' => false,                     // Automatically activate plugins after installation or not.
            'message'      => '',            // Message to output right before the plugins table.

        );

        tgmpa($plugins, $config);
    }
}
