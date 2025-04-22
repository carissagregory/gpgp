<?php
/**
 * template for displaying archive/game posts loop */

get_header();

if ( have_posts() ) :
    echo '<div class="container"><div class="row">'; // Container for game posts
    while ( have_posts() ) :
        the_post();

        // category colors for game posts
        $categories = get_the_category();
        $background_class = '';
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
        <article id="post-<?php the_ID(); ?>" <?php post_class($background_class); ?>>
            <header class="entry-header">
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </header>
            <div class="entry-content">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
                the_content(); //  game details (or excerpt)
                ?>
            </div>
        </article>
        <?php
    endwhile;
    echo '</div></div>';
else :
    echo '<p>No games found.</p>';
endif;

get_footer();
?>