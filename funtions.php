<?php

function ditl__scripts() {
	wp_register_style( 'ditl-style', get_stylesheet_directory_uri() . '/ditl-style.css'  );	wp_enqueue_style( 'ditl-style' );
}
add_action( 'wp_enqueue_scripts', 'ditl__scripts',200);
