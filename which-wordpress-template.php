<?php
/*
Plugin Name: Which Template Am I
Plugin URI: http://coolestguidesontheplanet.com/codesnippet/show-wordpress-template/
Description: Show Which Template WordPress is Using
Author: Neil Gee
Version: 1.0.0
Author URI:http://coolestguidesontheplanet.com
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/


// If called direct, refuse
if ( ! defined( 'ABSPATH' ) ) {
    die;
}


function show_wordpress_template() { 
	global $template;
	print_r( $template );
}

add_action( 'admin_bar_menu', 'show_wordpress_template' );