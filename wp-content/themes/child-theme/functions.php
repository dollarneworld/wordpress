<?php 

add_action( 'wp_enqueue_scripts', 'my_parent_styles' );
function my_parent_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
} 

add_filter( 'the_content', 'my_content_filter' );
function my_content_filter( $content ) {
$content .= ' (Comprobado por Pedro Mendez)';
} 

?>