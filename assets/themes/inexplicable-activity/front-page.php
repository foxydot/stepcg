<?php
/*
Template Name: Front Page
*/

add_action('wp_enqueue_scripts', 'msdlab_register_front_page_assets');
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
function msdlab_register_front_page_assets(){
    wp_enqueue_style('msd-homepage-style',get_stylesheet_directory_uri().'/lib/css/homepage.css',array('msd-style'));
    wp_enqueue_script('msd-homepage-jquery',get_stylesheet_directory_uri().'/lib/js/homepage-jquery.js',array('jquery','bootstrap-jquery'));
}

genesis();