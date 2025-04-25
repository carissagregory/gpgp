<?php
if ( is_category('game-posts') && have_posts() ) :
    echo '<div class="container"><div class="row gameGrid">';
    while ( have_posts() ) : the_post();

        $color_slug = get_field('game_color');
        $background_class = $color_slug ? 'gameCard ' . 'gameCard' . ucfirst($color_slug) : 'gameCard gameCardDefault';

        echo '<div class="col-12 col-sm-6 col-lg-4">';
        echo '<div class="' . esc_attr($background_class) . ' h-100">';

        echo '<div class="gameCardImage">';
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium', ['class' => 'img-fluid']);
        } else {
            echo '<div style="background-color: #E9E3DA; width: 100%; height: 150px; border-top-left-radius: 8px; border-top-right-radius: 8px;"></div>';
        }
        echo '</div>';

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

        if ( get_field('game_info') ) {
            echo '<p class="gameCardInfo"><span>Info:</span> ' . get_field('game_info') . '</p>';
        }
        if ( get_field('game_goal') ) {
            echo '<p class="gameCardGoal"><span>Goal:</span> ' . get_field('game_goal') . '</p>';
        }
        if ( get_field('game_tools') ) {
            echo '<p class="gameCardTools"><span>Tools:</span> ' . get_field('game_tools') . '</p>';
        }

        if ( get_field('game_rules') ) {
            echo '<p class="gameCardRules"><span>Rules:</span> ' . get_field('game_rules') . '</p>';
        }

        if ( get_field('game_description') ) {
            echo '<div class="gameCardDetails">' . get_field('game_description') . '</div>';
        }

        if ( get_field('game_other') ) {
            echo '<p class="gameCardOther"><span>Other:</span> ' . get_field('game_other') . '</p>';
        }

        echo '</div>'; // Close gameCardContent
        echo '</div></div>'; // Close gameCard and column

    endwhile;
    echo '</div></div>'; // Close grid and container
else :
    echo '<p class="text-center">No games found.</p>';
endif;
?>