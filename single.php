.gameCardImage {
  margin: 0;
  padding: 0;
  line-height: 0;
}

.gameCardImage img {
  width: 100%;
  max-height: 140px;
  object-fit: cover;
  border-radius: 0;
  margin: 0;
  display: block;
}

.gameCardContent {
  background-color: #fff;
  color: #000;
  padding: 8px;
  margin: 0;
  border-radius: 0;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  height: 220px;
  overflow-y: auto;
  font-family: "Lato", sans-serif;
}

.gameCardContent p,
.gameCardContent div {
  font-family: "Lato", sans-serif;
}

.gameCard {
  padding: 0;
  margin: 0 0 12px 0;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.gameCardTitle {
  text-align: center;
}

<?php
get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('gameCard'); ?>>
      <div class="gameCardImage">
        <?php the_post_thumbnail('medium'); ?>
      </div>
      <div class="gameCardContent">
        <h2 class="gameCardTitle"><?php the_title(); ?></h2>
        <div class="gameCardMeta">
          <?php if ( get_field('game_platform') ) : ?>
            <p class="gameCardPlatform"><span>Platform:</span> <?php the_field('game_platform'); ?></p>
          <?php endif; ?>
          <?php if ( get_field('game_players') ) : ?>
            <p class="gameCardPlayers"><span>Players:</span> <?php the_field('game_players'); ?></p>
          <?php endif; ?>
          <?php if ( get_field('game_time') ) : ?>
            <p class="gameCardTime"><span>Time:</span> <?php the_field('game_time'); ?></p>
          <?php endif; ?>
          <?php
          $difficulty = get_field('game_difficulty');
          if ($difficulty) {
              if (is_array($difficulty)) {
                  echo '<p class="gameCardDifficulty"><span>Difficulty:</span> ' . implode(', ', $difficulty) . '</p>';
              } else {
                  echo '<p class="gameCardDifficulty"><span>Difficulty:</span> ' . $difficulty . '</p>';
              }
          }
          ?>
        </div>
        <div class="gameCardDescription">
          <?php the_content(); ?>
        </div>
      </div>
    </article>
  <?php endwhile;
endif;

get_footer();
?>
