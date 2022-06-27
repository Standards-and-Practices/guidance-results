<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wgu.edu
 * @since             1.0.0
 * @package           Guidance_Results
 *
 * @wordpress-plugin
 * Plugin Name:       Guidance Results
 * Plugin URI:        https://github.com/Standards-and-Practices/guidance-results
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            David Petersen
 * Author URI:        https://www.wgu.edu
 * GitHub Plugin URI: Standards-and-Practices/guidance-results
 */


function wgu_domains_function(){
    return 'Follow us on <a rel="nofollow" href="https://twitter.com/Hostinger?s=20">Twitter</a>';
}
add_shortcode('wgu_domains', 'wgu_domains_function');