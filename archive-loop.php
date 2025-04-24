<?php
/**
 * Template for displaying archive/game posts loop
 */

if ( have_posts() ) :
    echo '<div class="gameGrid">';
    while ( have_posts() ) : the_post();

        $color_slug = get_field('game_color');
        $background_class = $color_slug ? 'gameCard' . ucfirst($color_slug) : 'gameCardDefault';

        echo '<div class="gameCard ' . esc_attr($background_class) . '">';
            echo '<h2 class="gameCardTitle">' . get_the_title() . '</h2>';
            echo '<div class="gameCardPlayers"><span>Players:</span> ' . get_field('game_players') . '</div>';
            echo '<div class="gameCardDetails">' . get_field('game_description') . '</div>';
        echo '</div>';

    endwhile;
    echo '</div>';
else :
    echo '<p>No posts found.</p>';
endif;
?>