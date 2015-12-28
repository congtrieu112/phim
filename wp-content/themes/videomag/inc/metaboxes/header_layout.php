<?php

/**
 * Adds a box to select header layout on Page edit screens.
 */
function vm_headerlayout_add_meta_box() {

	$screens = array( 'page', 'post', 'video' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'vm_headerlayout_metaboxid',
			__( 'Header Layout', 'vm_softcircles_domain' ),
			'vm_headerlayout_meta_box_render',
			$screen,
                        'normal',
                        'high'
		);
	}
}
add_action( 'add_meta_boxes', 'vm_headerlayout_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function vm_headerlayout_meta_box_render( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'vm_headerlayout_meta_box', 'vm_headerlayout_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_vm_headerlayout_option', true );
        $value = empty($value) ? 'default_light' : $value;
        
	echo '<label for="vm_headerlayout_option">';
	_e( 'Select header layout for this page.', 'vm_softcircles_domain' );
	echo '</label> ';
        echo '<select name="vm_headerlayout_option" id="vm_headerlayout_meta_box_select">';
        echo '<option value="default_light"'. selected($value, 'default_light') .'>Default Light</option>';
        echo '<option value="default_dark"'. selected($value, 'default_dark') .'>Default Dark</option>';
        echo '<option value="slides_light"'. selected($value, 'slides_light') .'>Slides Light</option>';
        echo '<option value="slides_dark"'. selected($value, 'slides_dark') .'>Slides Dark</option>';
        echo '<option value="flipped"'. selected($value, 'flipped') .'>Category &amp; Navigation Flipped</option>';
        echo '</select>';
        
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function vm_headerlayout_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['vm_headerlayout_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['vm_headerlayout_meta_box_nonce'], 'vm_headerlayout_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, its safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['vm_headerlayout_option'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['vm_headerlayout_option'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_vm_headerlayout_option', $my_data );
}
add_action( 'save_post', 'vm_headerlayout_save_meta_box_data' );