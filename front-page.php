<div class="front-page-container">
	<?php get_header(); ?>

	<main class="front-page-body">
		<div class="front-page-bg"></div>

		<div class="front-page-title">
			<?php 
				the_post();
				the_content();
			?>
		</div>
		<div class="front-page-search">
			<?php echo do_shortcode('[listing_search post_type="property,rental" search_other="off" search_postcode="on"  view="wentworth" style="slim"]'); ?>
		</div>			

		<div class="front-page-agents">
			<?php get_template_part('agents'); ?>
		</div>
	</main>

	<?php get_footer(); ?>
</div>

