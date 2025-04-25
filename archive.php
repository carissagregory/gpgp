<?php
// archive.php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Your loop code to display game posts
    endwhile;
else :
    echo '<p>No games found.</p>';
endif;
?>