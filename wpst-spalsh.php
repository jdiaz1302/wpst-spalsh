<?php

/**
 *
 * @link              https://jorgediaz.pw
 * @since             1.0.0
 * @package           Wpst_Spalsh
 *
 * @wordpress-plugin
 * Plugin Name:       WPSupport Team Splash
 * Plugin URI:        https://wpsupport.team
 * Description:       This awesome plugin was created for partership sites in order to add notifications and display offers from the main sites
 * Version:           1.0.2
 * Author:            Jorge Díaz
 * Author URI:        https://jorgediaz.pw
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpst-spalsh
 * Domain Path:       /languages

 * WPSupport Team Splash is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * WPSupport Team Splash is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with WPSupport Team Splash. If not, see {License URI}.
 */
// New Default Admin Page
 function admin_default_page() {
   return 'wp-admin/admin.php?page=wpst_spalsh_admin';
 }

 add_filter('login_redirect', 'admin_default_page');

// Create New Page
add_action('admin_menu', 'display_admin_page');

function display_admin_page() {
 		add_menu_page(
 				'WPSupport Team Dashboard', //$page_title
 				'WPST Splash', //$menu_title
 				'manage_options', //$capability
 				'wpst_spalsh_admin', //menu_slug
 				wpst_splashmin, //$functions
 				'dashicons-nametag', //icon_url
 				'3' //position number on menu from top
 			);
 	}

  // returns the root directory path of particular plugin
  define('ROOTDIR', plugin_dir_path(__FILE__));
  require_once(ROOTDIR . 'wpst_splashmin.php');

 ?>
