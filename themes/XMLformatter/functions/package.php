<?php
// Our custom post type function
function create_posttype() {

	register_post_type( 'package',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Package' ),
				'singular_name' => __( 'Package' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'package'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



function adding_custom_meta_boxes( $post_type, $post ) {
    add_meta_box( 
        'package_settings',
        __( 'Settings' ),
        'render_settings',
        'package',
        'side',
        'default'
    ); 
   
}
add_action( 'add_meta_boxes', 'adding_custom_meta_boxes', 10, 2 );

function render_settings(){

	
	if($_GET['post']){
		$package = get_post($_GET['post']);
	}

	if($package){
		$price = get_post_meta($package->ID, 'price', true);
		$storage = get_post_meta($package->ID, 'storage', true);
	}
	?>
	<input name="price" id="price" type="text" placeholder="<?php echo __('Price')?>" value="<?php echo $price?>" />
	<input name="storage" id="storage" type="text"  placeholder="<?php echo __('Storage')?>" value="<?php echo $storage?>" />
	<?php

}

function save_package_meta( $post_id, $post, $update ) {

    /*
     * In production code, $slug should be set only once in the plugin,
     * preferably as a class property, rather than in each function that needs it.
     */
    // var_dump($post_id);exit;
    $post_type = get_post_type($post_id);

    // If this isn't a 'book' post, don't update it.
    if ( "package" != $post_type ) return;

    // - Update the post's metadata.

    if ( isset( $_POST['price'] ) ) {
        update_post_meta( $post_id, 'price', $_POST['price'] ) ;
    }

    if ( isset( $_POST['storage'] ) ) {
        update_post_meta( $post_id, 'storage',  $_POST['storage'] );
    }

  
   
}
add_action( 'save_post', 'save_package_meta', 10, 3 );