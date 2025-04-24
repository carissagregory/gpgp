<?php
get_header();

if ( is_category('game-posts') && have_posts() ) :
    echo '<div class="container"><div class="row">';
    while ( have_posts() ) : the_post();

        $color_slug = get_field('game_color');
        $background_class = $color_slug ? 'gameCard ' . 'gameCard' . ucfirst($color_slug) : 'gameCard gameCardDefault';

        echo '<div class="col-md-6 col-lg-4 mb-4">';
        echo '<div class="' . esc_attr($background_class) . ' p-3 h-100">';

            if ( has_post_thumbnail() ) {
                echo '<div class="gameCardImage mb-3">';
                the_post_thumbnail('medium', ['class' => 'img-fluid']);
                echo '</div>';
            }

            echo '<h3 class="gameCardTitle">' . get_the_title() . '</h3>';
            echo '<p><strong>Players:</strong> ' . get_field('game_players') . '</p>';
            echo '<p><strong>Info:</strong> ' . get_field('game_info') . '</p>';
            echo '<p><strong>Goal:</strong> ' . get_field('game_goal') . '</p>';
            echo '<p><strong>Tools:</strong> ' . get_field('game_tools') . '</p>';
            echo '<p><strong>Age Range:</strong> ' . get_field('game_age') . '</p>';
            $difficulty = get_field('game_difficulty');
            if (is_array($difficulty)) {
                echo '<p><strong>Difficulty:</strong> ' . implode(', ', $difficulty) . '</p>';
            } else {
                echo '<p><strong>Difficulty:</strong> ' . $difficulty . '</p>';
            }
            echo '<div><strong>Rules:</strong> ' . get_field('game_rules') . '</div>';
            echo '<p><strong>Other:</strong> ' . get_field('game_other') . '</p>';
            echo '<div>' . get_field('game_description') . '</div>';

        echo '</div></div>';

    endwhile;
    echo '</div></div>';

else :
    echo '<p class="text-center">No games found.</p>';
endif;

get_footer();
?>