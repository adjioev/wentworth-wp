<?php
/**
 * Archive Template for Staff Directory Custom Post Type : directory
**/
global $epl_settings; 
get_header(); ?>
<section id="primary" class="site-content">
	<div id="content" role="main">
		<?php
		if ( have_posts() ) : ?>
			<div class="loop">

				<div class="loop-content">
					<?php
						$dir_counter = 1;
						while ( have_posts() ) : // The Loop
							the_post();
							if( is_sd_section_title() ) {
								epl_sd_loop_template($dir_counter,'section-big-block');
							}
							$dir_counter++;
						endwhile; // end of one post
					?>
					<div class="epl-clearfix"></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
