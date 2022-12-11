<?php

// Change Quick View text to Xem nhanh
function my_custom_translations( $strings ) {
    $text = array(
    'Quick View' => 'Xem nhanh'
    );
    $strings = str_ireplace( array_keys( $text ), $text, $strings );
    return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );