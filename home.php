
 <?php
get_header();

echo '<div class="container">';
echo '<h1>Games</h1>';

get_template_part('archive', 'loop');

echo '</div>';

get_footer();
?>