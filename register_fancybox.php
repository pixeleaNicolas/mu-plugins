<?php
add_action( 'wp_enqueue_scripts', 'pixelea_register_fancybox' );
function pixelea_register_fancybox(){
	wp_register_style('fancy-css','https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
	wp_register_script('fancy-js','https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'), '4.0', true);
}

function ng1_load_basic_gutenberg() {

   add_theme_support( 'wp-block-styles' );

}

add_action('after_setup_theme', 'ng1_load_basic_gutenberg');