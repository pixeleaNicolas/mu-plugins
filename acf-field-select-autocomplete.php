<?php
function acf_img_size_field_choices( $field ) {

	$field['choices'] = array();
	$choices = get_intermediate_image_sizes();
$field['choices'][ 'full' ] = 'full';
	if( is_array($choices) ) {
		foreach( $choices as $choice ) {
			$field['choices'][ $choice ] = $choice;
		}
	}
    // return the field
	return $field;
}
add_filter('acf/load_field/name=img_size', 'acf_img_size_field_choices');
add_filter('acf/load_field/name=img_size_big', 'acf_img_size_field_choices');
?>