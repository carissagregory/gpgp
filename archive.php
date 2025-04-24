<?php
get_header();

if ( have_posts() ) :
    echo '<div class="game-archive">';
    while ( have_posts() ) : the_post();

        $color_slug = get_field('game_color');
        $background_class = $color_slug ? 'gameCard' . ucfirst($color_slug) : 'gameCardDefault';

        echo '<div class="gamePost ' . esc_attr($background_class) . '">';
            if ( has_post_thumbnail() ) {
                echo '<div class="gameImage">';
                the_post_thumbnail('full');
                echo '</div>';
            }
            echo '<div class="gameSpecs">';
                echo '<h3 class="gameName">' . get_the_title() . '</h3>';
                echo '<p class="gamePlayers"><strong>Players:</strong> ' . get_field('game_players') . '</p>';
                echo '<p class="gameDetails"><strong>Info:</strong> ' . get_field('game_info') . '</p>';
                echo '<p class="gameGoal"><strong>Goal:</strong> ' . get_field('game_goal') . '</p>';
                echo '<p class="gameTools"><strong>Tools:</strong> ' . get_field('game_tools') . '</p>';
                echo '<p class="gameAge"><strong>Age Range:</strong> ' . get_field('game_age') . '</p>';
                echo '<p class="gameDifficulty"><strong>Difficulty:</strong> ' . get_field('game_difficulty') . '</p>';
                echo '<div class="gameRules"><strong>Rules:</strong> ' . get_field('game_rules') . '</div>';
                echo '<p class="gameOther"><strong>Other:</strong> ' . get_field('game_other') . '</p>';
                echo '<div class="gameDescription">' . get_field('game_description') . '</div>';
            echo '</div>';
        echo '</div>';

    endwhile;
    echo '</div>';
else :
    echo '<p>No posts found.</p>';
endif;

get_footer();
?>