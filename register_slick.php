<?php
add_action( 'wp_enqueue_scripts', 'pixelea_register_slickjs' );
function pixelea_register_slickjs(){
	wp_register_style('slick-css','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_register_script('slick-js','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}

