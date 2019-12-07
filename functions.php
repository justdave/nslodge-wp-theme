<?php

// Adds custom classes to the array of body classes.
function nslodge_body_classes( $classes ) {
    if ( is_page_template( 'template-embeddable.php' ) || is_404() ) {
        $classes[] = 'easywp-body-full-width';
    }
    return $classes;
}
add_filter( 'body_class', 'nslodge_body_classes' );
