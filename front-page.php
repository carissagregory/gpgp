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
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gamingImages/figurines.png" alt="figurines" id="mainImg" class="img-fluid">
				</div>
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/gamingImages/aboutGPGP.png" alt="about gpgp" id="aboutImg" class="img-fluid">
				</div>
			</div>
</div><!-- /.row -->
<?php
get_footer();
