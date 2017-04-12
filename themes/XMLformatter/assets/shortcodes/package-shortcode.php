<?php
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'Titlu',
        'bar' => 'pret',
    ), $atts );

    return "{$a['foo']} {$a['bar']}";
}
add_shortcode( 'bartag', 'bartag_func' );
?>