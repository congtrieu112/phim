<?php

/**
 * Adds a box to select header layout on Page edit screens.
 */
function vm_contentlayout_add_meta_box() {

	$screens = array( 'page', 'post', 'video' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'vm_contentlayout_metaboxid',
			__( 'Content Layout', 'vm_softcircles_domain' ),
			'vm_contentlayout_meta_box_render',
			$screen,
                        'normal',
                        'high'
		);
	}
}
add_action( 'add_meta_boxes', 'vm_contentlayout_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function vm_contentlayout_meta_box_render( $post ) {

	// Add an nonce field so we can check for it later.
	wp_nonce_field( 'vm_contentlayout_meta_box', 'vm_contentlayout_meta_box_nonce' );

	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$value = get_post_meta( $post->ID, '_vm_contentlayout_option', true );
        $value = empty($value) ? '2cr' : $value;
        ?>
	<label for="vm_contentlayout_option"><?php _e( 'Select page layout.', 'vm_softcircles_domain' );?></label>
        <br />
        <input type="radio" name="vm_contentlayout_option" value="1c" id="vm_contentlayout_meta_box_1c"  <?php checked($value, '1c');?>>
        <img src="<?php echo THEME_IMAGES; ?>/1c.png" />
        <input type="radio" name="vm_contentlayout_option" value="2cl" id="vm_contentlayout_meta_box_2cl" <?php checked($value, '2cl');?>>
        <img src="<?php echo THEME_IMAGES; ?>/2cl.png" />
        <input type="radio" name="vm_contentlayout_option" value="2cr" id="vm_contentlayout_meta_box_2cr" <?php checked($value, '2cr');?>>
        <img src="<?php echo THEME_IMAGES; ?>/2cr.png" />
        <input type="radio" name="vm_contentlayout_option" value="3cl" id="vm_contentlayout_meta_box_3cl" <?php checked($value, '3cl');?>>
        <img src="<?php echo THEME_IMAGES; ?>/3cl.png" />
        <input type="radio" name="vm_contentlayout_option" value="3cr" id="vm_contentlayout_meta_box_3cr" <?php checked($value, '3cr');?>>
        <img src="<?php echo THEME_IMAGES; ?>/3cr.png" />
        <input type="radio" name="vm_contentlayout_option" value="3cm" id="vm_contentlayout_meta_box_3cm" <?php checked($value, '3cm');?>>
        <img src="<?php echo THEME_IMAGES; ?>/3cm.png" />
        <?php
        
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function vm_contentlayout_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['vm_contentlayout_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['vm_contentlayout_meta_box_nonce'], 'vm_contentlayout_meta_box' ) ) {
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
	if ( ! isset( $_POST['vm_contentlayout_option'] ) ) {
		return;
	}

	// Sanitize user input.
	$my_data = sanitize_text_field( $_POST['vm_contentlayout_option'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, '_vm_contentlayout_option', $my_data );
}
add_action( 'save_post', 'vm_contentlayout_save_meta_box_data' );