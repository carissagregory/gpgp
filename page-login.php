<?php
/**
 * Template Name: Log In Page
 * Description: Page template with User Log In Fields
 *
 */

 get_header();

 the_post();
 ?>
 <div class="row">
	 <div class="col-md-8 order-md-2 col-sm-12">
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
        <form>

        </form>
			 <h1 class="entry-title"><?php the_title(); ?></h1>
             <h2><?php the_field("contact_email"); ?></h2>
             <?php $value = get_field( "password", "option"); ?>
 </div><!-- /.row -->
 <?php
 get_footer();