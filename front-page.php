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
	 <!-- <div class="col-md-8 order-md-2 col-sm-12"> -->
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
			<div class="row" id="imgDiv">
				<div class="col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gamingImages/figurines.png" alt="figurines" id="mainImg">
				</div><!--mainImg close-->
				<div class="col-lg-6 col-sm-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gamingImages/aboutGPGP.png" alt="about gpgp" id="aboutImg">
				</div><!--aboutImg close-->
			</div><!--mainDiv close--> 
			<div class="row" id="gameDisplay">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div><!--gameDisplay close-->
	 <!--</div> /.col -->
 </div><!-- /.row -->
 <?php
 get_footer();

