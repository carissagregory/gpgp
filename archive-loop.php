<?php
/**
 * Template for displaying archive/game posts loop
 */

if ( have_posts() ) :
    echo '<div class="gameGrid">';
    while ( have_posts() ) : the_post();

        $color_slug = trim(get_field('game_color'));
        $valid_colors = ['darkBlue', 'darkRed', 'gold', 'lightBlue', 'cream', 'black', 'white'];

        if (in_array($color_slug, $valid_colors)) {
            $background_class = 'gameCard gameCard' . ucfirst($color_slug);
        } else {
            $background_class = 'gameCard gameCardDefault';
        }

        echo '<div class="gameCard ' . esc_attr($background_class) . '">';
            // Featured image
            if ( has_post_thumbnail() ) {
                echo '<div class="gameCardImage">';
                the_post_thumbnail('medium');
                echo '</div>';
            }

            echo '<h2 class="gameCardTitle">' . get_the_title() . '</h2>';
            echo '<div class="gameCardPlayers"><span>Players:</span> ' . get_field('game_players') . '</div>';
            echo '<div class="gameCardInfo"><span>Info:</span> ' . get_field('game_info') . '</div>';
            echo '<div class="gameCardGoal"><span>Goal:</span> ' . get_field('game_goal') . '</div>';
            echo '<div class="gameCardRules"><span>Rules:</span> ' . get_field('game_rules') . '</div>';
            echo '<div class="gameCardOther"><span>Other:</span> ' . get_field('game_other') . '</div>';
            echo '<div class="gameCardDetails">' . get_field('game_description') . '</div>';
        echo '</div>';

    endwhile;
    echo '</div>';
else :
    echo '<p>No posts found.</p>';
endif;
?>