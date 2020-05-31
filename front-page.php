<div class="front-page-container">
	<?php get_header(); ?>

	<main class="front-page-body">
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<div id="front-page-bg" style="background-image: url('<?php echo $image[0]; ?>')">
			</div>
		<?php endif; ?>

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
			<?php echo do_shortcode('[agents_carousel]'); ?>
		</div>
	</main>

	<?php #get_footer(); ?>
</div>

