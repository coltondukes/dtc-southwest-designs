<?php
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
} else {
    echo do_shortcode( '[products limit=12 columns=3]' );
}

get_footer();
?>
