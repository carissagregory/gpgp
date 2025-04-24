<?php
get_header();

if ( is_category('game-posts') && have_posts() ) :
    echo '<div class="container"><div class="row gameGrid">';
    while ( have_posts() ) : the_post();

        $color_slug = get_field('game_color');
        $background_class = $color_slug ? 'gameCard ' . 'gameCard' . ucfirst($color_slug) : 'gameCard gameCardDefault';

        echo '<div class="col-12 col-sm-6 col-lg-4">';
        echo '<div class="' . esc_attr($background_class) . ' p-3 h-100">';

            if ( has_post_thumbnail() ) {
                echo '<div class="gameCardImage mb-0">';
                the_post_thumbnail('medium', ['class' => 'img-fluid']);
                echo '</div>';
            }

            echo '<div class="gameCardContent">';

            echo '<h3 class="gameCardTitle">' . get_the_title() . '</h3>';

            echo '<div class="gameCardMeta">';
            echo '<p class="gameCardPlayers"><span>Players:</span> ' . get_field('game_players') . '</p>';
            if ( get_field('game_age') ) {
                echo '<p class="gameCardAge"><span>Age Range:</span> ' . get_field('game_age') . '</p>';
            }
            if ( get_field('game_time') ) {
                echo '<p class="gameCardTime"><span>Time:</span> ' . get_field('game_time') . '</p>';
            }
            $difficulty = get_field('game_difficulty');
            if ($difficulty) {
                if (is_array($difficulty)) {
                    echo '<p class="gameCardDifficulty"><span>Difficulty:</span> ' . implode(', ', $difficulty) . '</p>';
                } else {
                    echo '<p class="gameCardDifficulty"><span>Difficulty:</span> ' . $difficulty . '</p>';
                }
            }
            echo '</div>';

            echo '<p class="gameCardInfo"><strong>Info:</strong> ' . get_field('game_info') . '</p>';
            echo '<p class="gameCardGoal"><strong>Goal:</strong> ' . get_field('game_goal') . '</p>';
            echo '<p class="gameCardTools"><strong>Tools:</strong> ' . get_field('game_tools') . '</p>';

            if (get_field('game_rules')) {
                echo '<div class="gameCardRules"><strong>Rules:</strong> ' . get_field('game_rules') . '</div>';
            }

            if (get_field('game_other')) {
                echo '<p class="gameCardOther"><strong>Other:</strong> ' . get_field('game_other') . '</p>';
            }

            echo '<div class="gameCardDetails">' . get_field('game_description') . '</div>';

            echo '</div>'; // Close gameCardContent

        echo '</div></div>';

    endwhile;
    echo '</div></div>';

else :
    echo '<p class="text-center">No games found.</p>';
endif;

get_footer();
?>