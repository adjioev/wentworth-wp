<?php
/**
 * Single Property Template: Expanded
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'epl-listing-single epl-property-single view-expanded' ); ?>>
	<div class="entry-content epl-content epl-clearfix container">


		<div>
			<?php do_action( 'epl_property_featured_image' ); ?>
			<?php do_action( 'epl_buttons_single_property' ); ?>
		</div>

		<div class="row">
			<div class="two-thirds column">
				<div class="property-page-info">
					<div class="epl-property-address property-details">
						<h2>
							<?php do_action( 'epl_property_address', false, false ); ?>
							<?php do_action( 'epl_property_suburb'); ?>
						</h2>
					</div>
					<div class="epl-property-info-container">
            			<div class="epl-left-info-block">
								<?php
							do_action( 'epl_property_content_before' );
							do_action( 'epl_property_the_content' );
							do_action( 'epl_property_content_after' ); // For Extension Support.
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="one-third column">
				<div class="buyer-booklet-block">
					<div class="text-block">
						<h6>Get a buyer booklet</h6>
						<h5>Sent to your phone</h5>
					</div>
					<div class="photo-block">

					</div>
				</div>

				<div class="property-price-block">
					<h5><?php do_action( 'epl_property_price' ); ?></h5>
				</div>
				
				<div class="property-meta-table">
					<div class="property-size-info">
						<h5>BED 1</h5>
						<h5>Bath 2</h5>
						<h5>Car 4</h5>
					</div>
					<div class="property-extra-info">
						<div class="property-extra-info-block">
							<div class="title">Sale Method</div>
							<div class="info">
								Virtual Auction
							</div>
						</div>
						<div class="property-extra-info-block">
							<div class="title">Auction Date</div>
							<div class="info">
								22 December 2020
							</div>
						</div>
						<div class="property-extra-info-block">
							<div class="title">Inspect</div>
							<div class="info">
								<?php do_action( 'epl_property_available_dates' ); // meant for rent only. ?>
								<?php do_action( 'wp_property_inspection_times' ); ?>
							</div>
						</div>
						<div class="property-extra-info-block">
							<div class="title">Key details</div>
							<div class="info">
								<?php do_action('wp_property_key_details'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 
		

		<div class="row">
			<div class="agents-block">
				<h3>About the Agents</h3>
				<?php do_action( 'epl_single_before_author_box' ); ?>
				<?php do_action( 'epl_single_author' ); ?>
				<?php do_action( 'epl_single_after_author_box' ); ?>
			</div>
			<div class="map-block">
				<?php do_action( 'epl_property_map' ); ?>
			</div>

		</div>
		<!--row end -->

	</div>
</div>
<!-- end property -->
