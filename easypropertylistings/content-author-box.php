<?php
/**
 * Author Box: Advanced Style
 *
 * @package     EPL
 * @subpackage  Templates/Content
 * @copyright   Copyright (c) 2020, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div id="epl-box<?php echo esc_attr( $epl_author->author_id ); ?>" class="author-box-container">
	<div class="agent-photo">
		<?php do_action( 'epl_author_thumbnail', $epl_author ); ?>
	</div>
	<?php
		$author_tabs = epl_author_tabs();
		$k = 'author_id';
		ob_start();
		$output_html = apply_filters( 'epl_author_tab_' . $k . '_callback', call_user_func( 'epl_author_tab_' . str_replace( ' ', '_', $k ), $epl_author ), $epl_author );
		echo $output_html; // phpcs:ignore WordPress.Security.EscapeOutput
	?>
</div>


