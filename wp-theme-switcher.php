<?php
/*
 Plugin Name: WP Theme Switcher Light
 Description: Automatically switch Wordpress themes on the fly
 Version: 5.2
 Author: Fayçal Tirich
 Author URI: http://faycaltirich.blogspot.com/2011/09/wp-theme-switcher.html
 Plugin URI: http://faycaltirich.blogspot.com/2011/09/wp-theme-switcher.html
 */

class WP_Theme_Switcher_Light {

	public function add_admin_options () {
		if (function_exists('add_options_page')) {
			if( current_user_can('manage_options') ) {
				add_options_page("WP Theme Switcher Light", "WP Theme Switcher Light", 'manage_options', __FILE__, array(&$this, 'admin_options_content'));
			}
		}
	}

	public function admin_options_content () {
		include('admin_options.php');
	}
}

$wp_theme_switcher_light = new WP_Theme_Switcher_Light();


add_action('admin_menu', array(&$wp_theme_switcher_light,'add_admin_options'));

?>