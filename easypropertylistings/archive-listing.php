<?php
/**
 * The Default Template for displaying all Easy Property Listings archive/loop posts with WordPress Themes
 *
 * @package EPL
 * @subpackage Templates/Themes/Default
 * @since 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>
<section id="primary" class="container site-content content epl-archive-default <?php echo esc_attr( epl_get_active_theme_name() ); ?>">
	<div id="content" role="main">

    <?php echo do_shortcode('[listing_search post_type="property,rental" style="slim" search_other="off" search_car="on" modesearch_price="on"]'); ?>

		<?php
		if ( have_posts() ) :
			?>

			<div class="loop pad">
				<header class="archive-header entry-header loop-header">
					<h4 class="archive-title loop-title">
						<?php # do_action( 'epl_the_archive_title' ); ?>
					</h4>
				</header>

				<div class="entry-content loop-content <?php echo esc_attr( epl_template_class( 'default', 'archive' ) ); ?>">
					<?php do_action( 'epl_property_loop_start' ); ?>
					<?php
					while ( have_posts() ) : // The Loop.
						the_post();
						do_action( 'epl_property_blog' );
					endwhile; // end of one post.
					?>
					<?php do_action( 'epl_property_loop_end' ); ?>
				</div>

				<div class="loop-footer">
					<!-- Previous/Next page navigation -->
					<div class="loop-utility clearfix">
						<?php do_action( 'epl_pagination' ); ?>
					</div>
				</div>
			</div>
			<?php
			else :
				?>
			<div class="hentry">
				<?php do_action( 'epl_property_search_not_found' ); ?>
			</div>
			<?php endif; ?>

	</div>
</section>



<div class="front-page-agents">
	<?php 
		$position = get_post_type() === "property" ? "sales agent" : "property manager" ;
		echo do_shortcode('[agents_carousel position="' . $position  .'"]'); 
	?>
</div>
<?php
#get_sidebar();
#get_footer();
