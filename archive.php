<?php
/**
 * The Template for displaying Archive (POSTS) pages.
 */

get_header();

if ( have_posts() ) :
?>
<header class="page-header">
	<h1 class="page-title">
		<?php
			if ( is_day() ) :
				printf( esc_html__( 'Daily Archives: %s', 'gpgp-theme' ), get_the_date() );
			elseif ( is_month() ) :
				printf( esc_html__( 'Monthly Archives: %s', 'gpgp-theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'gpgp-theme' ) ) );
			elseif ( is_year() ) :
				printf( esc_html__( 'Yearly Archives: %s', 'gpgp-theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'gpgp-theme' ) ) );
			else :
				esc_html_e( 'Game Archives', 'gpgp-theme' );
			endif;
		?>
	</h1>
</header>
<?php
	// Start the loop for displaying posts.
	while ( have_posts() ) : the_post();
?>
<div class="gamePost <?php 
	// Add class based on post type
	if ( has_term( 'deck-builder', 'game-type' ) ) {
		echo 'gameDeckBuilder';
	} elseif ( has_term( 'table-top-rpg', 'game-type' ) ) {
		echo 'gameTableTopRPG';
	} elseif ( has_term( 'board-game', 'game-type' ) ) {
		echo 'gameBoardGame';
	} elseif ( has_term( 'miniature-wargame', 'game-type' ) ) {
		echo 'gameMiniatureWargame';
	}
	?>">
	<div class="gameImage">
		<?php the_post_thumbnail( 'full' ); // Display game image ?>
	</div>
	<div class="gameInfo">
		<h3 class="gameName"><?php the_title(); ?></h3>
		<p class="gamePlayers"><?php the_field( 'game_players' ); ?></p> <!-- Custom field for players -->
		<p class="gameInfo"><?php the_field( 'game_info' ); ?></p> <!-- Custom field for game information -->
		<div class="gameRules"><?php the_field( 'game_rules' ); ?></div> <!-- Custom field for game rules -->
	</div>
</div>
<?php
	endwhile;

	// Reset post data after the loop.
	wp_reset_postdata();
else :
	// If no posts are found, show a message.
	get_template_part( 'content', 'none' );
endif;

get_footer();
?>