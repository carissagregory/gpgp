<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>

<div class="container">
    <div class="row">
        <?php get_template_part('posts', 'archive'); ?>
    </div>
</div>

<?php
get_footer();
?>
