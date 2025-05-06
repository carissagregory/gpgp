<?php
if (is_category('game-posts') && have_posts()) :

    echo '<div class="container">';

    get_template_part('archive-carousel'); // assuming archive-carousel.php is saved in theme root

    echo '<div class="row gameGrid">';
    
    while (have_posts()) : the_post();

        $colorSlug = get_field('game_color');
        $backgroundClass = $colorSlug ? 'gameCard gameCard' . ucfirst($colorSlug) : 'gameCard gameCardDefault';

        echo '<div class="col-12 col-sm-6 col-lg-4">';
        echo '<div class="' . esc_attr($backgroundClass) . ' h-100">';

        echo '<div class="gameCardImage">';
        if (has_post_thumbnail()) {
            the_post_thumbnail('medium', ['class' => 'img-fluid']);
        } else {
            echo '<div style="background-color:#E9E3DA;width:100%;height:150px;border-top-left-radius:8px;border-top-right-radius:8px;"></div>';
        }
        echo '</div>';

        echo '<div class="gameCardContent">';
        echo '<h3 class="gameCardTitle">' . get_the_title() . '</h3>';

        echo '<div class="gameCardMeta">';

        if ($field = get_field('game_number')) {
            echo '<p class="gameCardNumber"><span>No:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_time')) {
            echo '<p class="gameCardTime"><span>Time:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_age')) {
            echo '<p class="gameCardAge"><span>Age:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_level')) {
            $levelOutput = is_array($field) ? implode(', ', $field) : $field;
            echo '<p class="gameCardLevel"><span>Level:</span> ' . esc_html($levelOutput) . '</p>';
        }

        echo '</div>';

        if ($field = get_field('game_info')) {
            echo '<p class="gameCardInfo"><span>Info:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_goal')) {
            echo '<p class="gameCardGoal"><span>Goal:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_tools')) {
            echo '<p class="gameCardTools"><span>Tools:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_rules')) {
            echo '<p class="gameCardRules"><span>Rules:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_description')) {
            echo '<p class="gameCardDescription"><span>Desc:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_other')) {
            echo '<p class="gameCardOther"><span>Other:</span> ' . esc_html($field) . '</p>';
        }
        if ($field = get_field('game_more')) {
            echo '<p class="gameCardMore"><span>More:</span> ' . esc_html($field) . '</p>';
        }

        echo '</div>';
        echo '</div></div>';

    endwhile;

    echo '</div></div>'; // close row and container

else :

    if (!is_category('game-posts')) {
        echo '<h1 class="page-title">' . single_cat_title('', false) . '</h1>';
    }
    echo '<p class="text-center">No games found.</p>';

endif;
?>

<?php // this needs to go in header.php if it works ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    480: {
      slidesPerView: 1,
    }
  }
});
</script>