<?php
add_action( 'wp_enqueue_scripts', 'pixelea_register_leaflet' );
function pixelea_register_leaflet(){
	wp_register_style('leaflet','https://unpkg.com/leaflet@1.9.3/dist/leaflet.css');
	wp_register_script('leaflet','https://unpkg.com/leaflet@1.9.3/dist/leaflet.js', array('jquery'), '4.0', true);
}