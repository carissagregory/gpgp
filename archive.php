<?php
/**
 * Template for displaying Archive (POSTS) pages */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        echo '<h2>' . get_the_title() . '</h2>';
    endwhile;
else :
    echo '<p>No posts found.</p>';
endif;

get_footer();
?>