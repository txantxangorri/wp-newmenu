<?php

/**

 * @package  txinparta_newmenu

 */

/*
Plugin Name: Txinparta NewMenu
Plugin URI: https://github.com/txinparta/wp-newmenu
Description: Irontec's plugin.
Version: 1.0.0
Author: Irontec 
Author URI: https://github.com/txinparta
License: AGPL-3.0-or-later
Text Domain: txinparta_newmenu
*/


/*
Txinparta NewMenu. It adds a new menu in the admin panel.
Copyright (C) 2018 Irontec 
This program is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version. 
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details. 
*/

defined( 'ABSPATH' ) or die( 'Not allowed' );

class NewMenu 
{
    public $plugin;

    function __construct() {
            $this->plugin = plugin_basename( __FILE__ );
    }   
    
    public function register() {
        //Initializing styles, scripts and actions
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
        add_action( 'admin_menu', array( $this, 'add_admin_page' ) );
        add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
    }

    public function add_admin_page() {
            add_menu_page( 'Txinparta NewMenu', 'NewMenu', 'manage_options', 'txinparta_newmenu', array( $this, 'admin_newmenu' ), 'dashicons-admin-site', 110 );
    }     
    
    public function admin_newmenu() {
            require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
    }
       
    public function settings_link( $links ) {
            $settings_link = '<a href="admin.php?page=txinparta_newmenu">Settings</a>';
            array_push( $links, $settings_link );
            return $links;
    }
       
    function activate() {
            flush_rewrite_rules();
    }

    function deactivate() {
            flush_rewrite_rules();
    }  

    public function enqueue() {
            // enqueue all our scripts
            wp_enqueue_style( 'mypluginstyle', plugins_url( 'assets/mystyle.css', __FILE__ ) );
    }    
    
}


if ( class_exists( 'NewMenu' ) ) {

	$newmenu = new NewMenu();
	$newmenu->register();

}


// activation
register_activation_hook( __FILE__, array( $newmenu, 'activate' ) );


// deactivation
register_deactivation_hook( __FILE__, array( $newmenu, 'deactivate' ) );
