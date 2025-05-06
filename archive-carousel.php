<div class="gameCarousel swiper-container">
  <div class="swiper-wrapper">

    <?php while (have_posts()) : the_post(); ?>

      <?php
      $colorSlug = get_field('game_color');
      $backgroundClass = $colorSlug ? 'gameCard gameCard' . ucfirst($colorSlug) : 'gameCard gameCardDefault';
      ?>

      <div class="swiper-slide">
        <div class="<?php echo esc_attr($backgroundClass); ?> h-100">

          <div class="gameCardImage">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium', ['class' => 'img-fluid']);
            } else {
              echo '<div style="background-color:#E9E3DA;width:100%;height:150px;border-top-left-radius:8px;border-top-right-radius:8px;"></div>';
            }
            ?>
          </div>

          <div class="gameCardContent">
            <h3 class="gameCardTitle"><?php the_title(); ?></h3>

            <div class="gameCardMeta">
              <?php
              if ($field = get_field('game_number')) {
                echo '<div class="metaRow"><div class="metaLabel">No:</div><div class="metaValue">' . esc_html($field) . '</div></div>';
              }
              if ($field = get_field('game_time')) {
                echo '<div class="metaRow"><div class="metaLabel">Time:</div><div class="metaValue">' . esc_html($field) . '</div></div>';
              }
              if ($field = get_field('game_age')) {
                echo '<div class="metaRow"><div class="metaLabel">Age:</div><div class="metaValue">' . esc_html($field) . '</div></div>';
              }
              if ($field = get_field('game_level')) {
                $levelOutput = is_array($field) ? implode(', ', $field) : $field;
                echo '<div class="metaRow"><div class="metaLabel">Level:</div><div class="metaValue">' . esc_html($levelOutput) . '</div></div>';
              }
              ?>
            </div>

            <?php
            if ($field = get_field('game_description')) {
              echo '<p class="gameCardDescription"><span>Desc:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_info')) {
              echo '<p class="gameCardInfo"><span>Info:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_tools')) {
              echo '<p class="gameCardTools"><span>Tools:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_rules')) {
              echo '<p class="gameCardRules"><span>Rules:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_goal')) {
              echo '<p class="gameCardGoal"><span>Goal:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_other')) {
              echo '<p class="gameCardOther"><span>Other:</span> ' . esc_html($field) . '</p>';
            }
            if ($field = get_field('game_more')) {
              echo '<p class="gameCardMore"><span>More:</span> ' . esc_html($field) . '</p>';
            }
            ?>

            <div class="viewMore">
              <a href="<?php the_permalink(); ?>">View Full Info</a>
            </div>

          </div> <!-- .gameCardContent -->

        </div> <!-- .gameCard -->
      </div> <!-- .swiper-slide -->

    <?php endwhile; ?>

  </div> <!-- .swiper-wrapper -->

  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div> <!-- .gameCarousel -->