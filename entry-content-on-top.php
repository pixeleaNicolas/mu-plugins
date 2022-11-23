<?php
add_filter( 'body_class', 'entry_content_on_top_body_class' );
function entry_content_on_top_body_class( $classes ) {
    if (is_singular('room')) {
        $classes[] = 'entry-content-on-top';
    }
    return $classes;
}