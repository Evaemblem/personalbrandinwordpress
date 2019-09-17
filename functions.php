<?php 
	 add_action( 'wp_enqueue_scripts', 'envoblog_child_enqueue_styles' );
	 function envoblog_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>