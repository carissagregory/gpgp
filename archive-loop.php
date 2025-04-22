<?php
/**
 * template for displaying archive/game posts loop */

get_header();

if ( have_posts() ) :
    echo '<div class="container"><div class="row">';
    get_template_part('posts', 'archive');
    echo '</div></div>';
else :
    echo '<p>No games found</p>';
endif;

get_footer();
?>