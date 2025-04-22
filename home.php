/*
 * Created to load game posts on the home/posts page.
 */


<?php
get_header();

echo '<div class="container">';
echo '<h1>Games</h1>';

if ( have_posts() ) :
    echo '<div class="gameGrid">';
    while ( have_posts() ) : the_post();
        get_template_part('archive', 'loop');
    endwhile;
    echo '</div>';
else :
    echo '<p>No games found.</p>';
endif;

echo '</div>';

get_footer();
?>