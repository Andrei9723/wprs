<?php
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'ids' => '11 , 22 , 23 , 24',
    ), $atts );
    $ids = explode(",", $a['ids']);
    foreach ($ids as $id) {
    	echo wp_get_attachment_image($id, $a["size"]);
    }
    // return "ids = {$a['ids']}";
}
// add_shortcode( 'slider', 'bartag_func' );
