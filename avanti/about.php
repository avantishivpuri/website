<?php
/* 
Template Name: About
*/

//* Hook before header widget area before site header
add_action( 'genesis_after_header', 'bg_after_header_widget_area' );
function bg_after_header_widget_area() {
 
	genesis_widget_area( 'after-header', array(
		'before' => '<div class="after-header widget-area">',
		'after'  => '</div>',
	) );
 
}

//* Hook before header widget area before site header
add_action( 'genesis_after_content_sidebar_wrap', 'bg_testimonials_widget_area'  );
function bg_testimonials_widget_area() {
 
	genesis_widget_area( 'testimonials', array(
		'before' => '<div class="testimonials widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );
 
}

genesis(); // <- everything important: make sure to include this. 