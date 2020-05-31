<div class="manage-page">
	<?php get_header(); ?>

	<main>
		<div class="hero-image-block">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div class="hero-content-block" style="background-image: url('<?php echo $image[0]; ?>')">
						<div class="title"><h1>Manage Your Property With Us</h1></div>


						<div class="content-buttons">
							<div class="wp-block-buttons aligncenter">
								<div class="wp-block-button is-style-outline">
									<a class="wp-block-button__link has-text-color has-very-light-gray-color no-border-radius">Download our<br>Property Management Guide</a>
								</div>
							</div>

							<div class="wp-block-buttons aligncenter">
								<div class="wp-block-button is-style-outline">
									<a class="wp-block-button__link has-text-color has-very-light-gray-color no-border-radius">Request a<br>Property Appraisal</a>
								</div>
							</div>
						</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="page-content container">
				<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
							the_content();
						}
					}
				?>
		</div>
	</main>

	<div class="front-page-agents">
		<?php echo do_shortcode('[agents_carousel position="property manager"]'); ?>
	</div>
</div>

