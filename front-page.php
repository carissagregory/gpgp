<?php
/**
 * Template Name: Front page
 * Description: Page template for the homepage.
 *
 */

get_header();

the_post();
?>
<div class="row">
	<div class="col-md-8 order-md-2 col-sm-12">
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="scroll-container">
				<img src="/assets/images/gamingImages/greenDice.jpg" alt="green dice" width="600" height="400">
				<img src="/assets/images/gamingImages/greenDice.jpg" alt="green dice" width="600" height="400">
				<img src="/assets/images/gamingImages/greenDice.jpg" alt="green dice" width="600" height="400">
				<img src="/assets/images/gamingImages/greenDice.jpg" alt="green dice" width="600" height="400">
			</div>
</div><!-- /.row -->
<?php
get_footer();
