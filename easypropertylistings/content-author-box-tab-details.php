<?php
/**
 * Author Box: Details Tab
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- Author Box Container Tabbed Content -->
<div class="epl-author-contact-details author-contact-details">
	<h3 class="epl-author-title author-title">
		<?php echo esc_attr( $author_title ); ?>
	</h3>

	<div class="epl-author-contact author-contact author-contact-mobile-phone">
		<h5>m <?php echo esc_html( $epl_author->get_author_mobile() ); ?></h5>
	</div>

	<div class="epl-author-contact author-contact author-contact-email">
		<h5>e <?php echo esc_html( $epl_author->get_email() ); ?></h5>
	</div>

	<h6 class="epl-author-view author-contact">
		<a href="<?php echo esc_url( $permalink ); ?>">View Profile</a>
	</h6>
</div>

