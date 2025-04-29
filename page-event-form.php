<?php
/**
 * Template Name: Event Form page
 * Description: Page template for the event form.
 *
 */

acf_form_head(); 
get_header();

the_post();



?>
<div class="row">
	 <!-- <div class="col-md-8 order-md-2 col-sm-12"> -->
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
            <div class="acf-form-container">
                <?php
                    acf_form([
                        'post_id' => 'new_post',
                        'new_post' => [
                            'post_type'   => 'tribe_events',
                            'post_status' => 'publish',
                        ],
                        'submit_value' => 'Create Event',
                        'field_groups' => [41],
                    ]);
                ?>
            </div>
	 <!--</div> /.col -->
 </div><!-- /.row -->
 <?php
 get_footer();