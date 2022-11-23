<?php
add_action( "save_post_room",'acf_room_presentation_texte_to_content',20,2);
function acf_room_presentation_texte_to_content($post_id, $post){
	if ( wp_is_post_revision( $post_id ) ) return;
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( 'room' !== $post->post_type )	return;
	//EVITER LES BOUCLES INFINI
	remove_action(  "save_post_room",'acf_room_presentation_texte_to_content',20,2 );
	// Creation du THE_CONTENT()
	$content = get_field( 'texte_presentation',$post_id );
	$equipements =get_field('equipements',$post_id);
	$data = array(
		'ID' => $post_id,
		'post_content' => $content
	);
	//Création de la thumbnail avec la galerie si celle-ci est vide
	$galerie = get_field( 'galerie_photo',$post_id );
	if (empty(get_the_post_thumbnail($post_id)) && !empty($galerie)) {
		set_post_thumbnail( $post, $galerie['0'] );
	}
	if (empty($equipements) || $equipements == 1 ) {
		$equipements_src = get_field('equipements',"220877");
		update_field('equipements', $equipements_src,$post_id);
	}
	wp_update_post( $data );
}