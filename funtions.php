<?php
add_action( 'after_setup_theme', 'vce_child_theme_setup', 99 );
function vce_child_theme_setup(){
    add_action('wp_enqueue_scripts', 'vce_child_load_scripts');
    
}
function vce_child_load_scripts() {	
   wp_register_style('vce_child_load_scripts', trailingslashit(get_stylesheet_directory_uri()).'style.css', false, THEME_VERSION, 'screen');	
   wp_enqueue_style('vce_child_load_scripts');  
}
