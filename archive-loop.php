<?php
/**
 * The template for displaying the archive loop.
 */

get_header();

if ( have_posts() ) :
    echo '<div class="game-archive">'; // Container for game posts
    while ( have_posts() ) :
        the_post();

        // Get the categories associated with the post
        $categories = get_the_category();
        $background_color = '';

        // Check for specific categories and assign colors
        foreach ($categories as $category) {
            if ($category->slug == 'board-game') {
                $background_color = '#BB8A3D'; // Gold for Board Game
            } elseif ($category->slug == 'rpg') {
                $background_color = '#932B28'; // Red for RPG
            } elseif ($category->slug == 'card-game') {
                $background_color = '#989CBE'; // Light Blue for Card Games
            } elseif ($category->slug == 'miniature-wargame') {
                $background_color = '#313768'; // Dark Blue for Miniature Wargames
            }
            // Add more categories and colors as needed
        }

        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-color: <?php echo esc_attr($background_color); ?>;">
            <header class="entry-header">
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </header>
            <div class="entry-content">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                the_content(); // Display the game details (or excerpt)
                ?>
            </div>
        </article>
        <?php
    endwhile;
    echo '</div>';
else :
    echo '<p>No games found.</p>';
endif;

get_footer();
?>