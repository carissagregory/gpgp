<?php
/* Template Name: Games Page */
get_header();
?>

<div class="games-archive-header">
  <h1>Games Collection</h1>
  <p>Browse through our collection of games.</p>
</div>

<div class="games-archive-content">
  <?php
    // Query to get posts from the 'game' category or a custom category for games
    $args = array(
      'category_name' => 'games', // Make sure 'games' is your category slug
      'posts_per_page' => 10,      // Limit the number of posts displayed
    );
    $game_query = new WP_Query($args);
    
    if ($game_query->have_posts()) :
      while ($game_query->have_posts()) :
        $game_query->the_post();
  ?>
        <div class="game-post">
          <h2><?php the_title(); ?></h2>
          
          <div class="game-post-image">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="game-post-info">
            <p>Game Type: 
              <?php 
                // Display game type from categories
                $categories = get_the_category();
                if (!empty($categories)) {
                    echo esc_html($categories[0]->name); // Display the first category as the game type
                }
              ?>
            </p>
            
            <p>How to Play: <?php echo get_post_meta(get_the_ID(), 'how_to_play', true); ?></p>
            <p>Number of Players: <?php echo get_post_meta(get_the_ID(), 'players', true); ?></p>
          </div>
          
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
  <?php
      endwhile;
    else :
      echo '<p>No games found.</p>';
    endif;
  ?>
</div>

<?php get_footer(); ?>