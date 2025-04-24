<?php
get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		$color_slug = trim(get_field('game_color'));
		if ( $color_slug ) {
		    $valid_colors = ['darkBlue', 'darkRed', 'gold', 'lightBlue', 'cream', 'black', 'white'];
		    $background_class = in_array($color_slug, $valid_colors) ? 'gameCard gameCard' . ucfirst($color_slug) : 'gameCard gameCardDefault';

		    echo '<div class="' . esc_attr($background_class) . '">';

		    if ( has_post_thumbnail() ) {
		        echo '<div class="gameCardImage">';
		        the_post_thumbnail('medium');
		        echo '</div>';
		    }

		    echo '<h2 class="gameCardTitle">' . get_the_title() . '</h2>';
		    echo '<div class="gameCardPlayers"><span>Players:</span> ' . get_field('game_players') . '</div>';
		    echo '<div class="gameCardInfo"><span>Info:</span> ' . get_field('game_info') . '</div>';
		    echo '<div class="gameCardGoal"><span>Goal:</span> ' . get_field('game_goal') . '</div>';
		    echo '<div class="gameCardTools"><span>Tools:</span> ' . get_field('game_tools') . '</div>';
		    echo '<div class="gameCardAge"><span>Age Range:</span> ' . get_field('game_age') . '</div>';
		    echo '<div class="gameCardDifficulty"><span>Difficulty:</span> ' . get_field('game_difficulty') . '</div>';
		    echo '<div class="gameCardRules"><span>Rules:</span> ' . get_field('game_rules') . '</div>';
		    echo '<div class="gameCardOther"><span>Other:</span> ' . get_field('game_other') . '</div>';
		    echo '<div class="gameCardDetails">' . get_field('game_description') . '</div>';

		    echo '</div>';
		} else {
		    get_template_part( 'content', 'single' );
		}
	endwhile;
endif;

get_footer();