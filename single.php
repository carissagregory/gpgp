<?php
get_header();

if (have_posts()) :
while (have_posts()) : the_post();
$color = get_field('game_color');
$colorClass = $color ? 'gameCard' . ucfirst($color) : 'gameCardDefault';
?>
<article <?php post_class('gameCard ' . esc_attr($colorClass)); ?>>
  <div class="gameCardImage">
    <?php the_post_thumbnail('medium'); ?>
  </div>
  <div class="gameCardContent">
    <h2 class="gameCardTitle"><?php the_title(); ?></h2>
    <div class="gameCardMetaGrid">
      <?php
      $fields = [
        'game_number',
        'game_time',
        'game_age',
        'game_description',
        'game_info',
        'game_tools',
        'game_rules',
        'game_goal',
        'game_level',
        'game_other',
        'game_more'
      ];
      foreach ($fields as $fieldName) {
        $field = get_field_object($fieldName);
        if ($field && $field['value']) {
          echo '<div class="metaItem"><span class="metaLabel">' . esc_html($field['label']) . ':</span> <span class="metaValue">' . esc_html($field['value']) . '</span></div>';
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