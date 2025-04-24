<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title('<h2>', '</h2>');
        the_excerpt();
    endwhile;
else :
    echo '<p>No posts found.</p>';
endif;

get_footer();