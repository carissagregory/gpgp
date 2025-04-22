<?php
/**
 * Template for displaying Archive (POSTS) pages */

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
<div class="game-archive">
<?php
	// Start loop for displaying posts/games
	while ( have_posts() ) : the_post();

		$background_class = '';
		$categories = get_the_category();
		foreach ($categories as $category) {
			if ($category->slug == 'blue') {
				$background_class = 'gameCardDarkBlue';
			} elseif ($category->slug == 'red') {
				$background_class = 'gameCardDarkRed';
			} elseif ($category->slug == 'gold') {
				$background_class = 'gameCardGold';
			} elseif ($category->slug == 'lightblue') {
				$background_class = 'gameCardLightBlue';
			} elseif ($category->slug == 'cream') {
				$background_class = 'gameCardCream';
			} elseif ($category->slug == 'black') {
				$background_class = 'gameCardBlack';
			} elseif ($category->slug == 'white') {
				$background_class = 'gameCardWhite';
			}
		}
		if (empty($background_class)) {
			$background_class = 'gameCardDefault';
		}
?>
<div class="gamePost <?php echo esc_attr($background_class); ?>">
	<div class="gameImage">
		<?php the_post_thumbnail( 'full' ); // Display game image ?>
	</div>
	<div class="gameSpecs">
		<h3 class="gameName"><?php the_title(); ?></h3>
		<p class="gamePlayers"><?php the_field( 'game_players' ); ?></p> <!-- Custom field for players -->
		<p class="gameDetails"><?php the_field( 'game_info' ); ?></p> <!-- Custom field for game information -->
		<div class="gameRules"><?php the_field( 'game_rules' ); ?></div> <!-- Custom field for game rules -->
	</div>
</div>
<?php
	endwhile;
?>
</div>
<?php
	// Reset after loop
	wp_reset_postdata();
else :
	// If no posts found, show message
	get_template_part( 'content', 'none' );
endif;

get_footer();
?>