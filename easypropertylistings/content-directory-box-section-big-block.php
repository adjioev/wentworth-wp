<?php
/**
 * Author Box: Simple Card
 *
 * @package     EPL-STAFF-DIRECTORY
 * @subpackage  Template/Section
 * @copyright   Copyright (c) 2016, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="post-<?php the_ID(); ?>" class="epl-author-section-header epl-author-parent epl-author-archive epl-author-simple epl-author-card epl-author <?php echo $grid_class; ?>">
	<div class="entry-content">
		<div class="epl-author-box epl-author-details">
            <div class="epl-author-image">
                <?php echo get_the_post_thumbnail(null, 'large' );  ?>
            </div>
			<div class="epl-author-info">
				<?php
				if( get_the_content() != '' ) { ?>
					<h5 class="epl-author-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<?php } else { ?>
					<h5 class="epl-author-title"><?php the_title(); ?></h5>
				<?php } ?>
				<?php if($show_position) { ?>
				<div class="epl-author-position"><?php echo $epl_author->get_author_position() ?></div>
				<?php } ?>
				<?php if($show_mobile) { ?>
				<div class="epl-author-contact">
					<?php
						if ( $epl_author->get_author_mobile() != '' ) { ?>
							<span class="label-mobile"><?php _e('Mobile', 'epl-staff-directory'); ?> </span><span class="mobile"><?php echo $epl_author->get_author_mobile(); ?></span>
					<?php } ?>
				</div>
				<?php } ?>
			</div>

		</div>
	</div>
</div>
