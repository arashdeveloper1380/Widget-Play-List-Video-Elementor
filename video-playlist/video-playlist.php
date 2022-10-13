<?php
/**
 * Plugin Name: Arash Play List
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Arash Narimani
 * Author URI:  https://github.com/arashdeveloper1380
 * Text Domain: elementor-addon
 */

function register_play_list_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/video-playlist.php' );

	$widgets_manager->register( new \Elementor_play_list_Widget() );

}
add_action( 'elementor/widgets/register', 'register_play_list_widget' );
