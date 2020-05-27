<?php
/**
 * Single Page Big Image
 *
 * @package     EPL-STAFF-DIRECTORY
 * @subpackage  Template/Big
 * @copyright   Copyright (c) 2016, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!--- Author Page Style --->
<h4 class="author-title"><?php the_title(); ?></h4>

<div id="post-<?php the_ID(); ?>" <?php post_class('epl-sd-single epl-sd-big-image directory-page-dynamic epl-clearfix wp-single-agent-page'); ?>>
    <div class="entry-header">
        <?php if (has_post_thumbnail()) { ?>
            <div class="entry-image">
                <?php the_post_thumbnail('index_thumbnail', array('class' => 'index-thumbnail')); ?>
            </div>
        <?php }
        ?>
    </div>

    <div class="entry-content container">  
            <div class="row">
                <div class="two-thirds column">
                    <h2>About <?php the_author_meta('first_name', $epl_author->author_id); ?></h2>
                    <?php
                        if( function_exists('epl_the_content') ) {
                            epl_the_content();
                        } else {
                            the_content();
                        }
                    ?>
                </div>

                <div class="one-third column">
                    <h3>Contact  <?php the_author_meta('first_name', $epl_author->author_id); ?></h3>
                    <div class="contact-block">
                        <?php if ($epl_author->get_email() != '') { ?>
                            <div class="label-email">
                                <span><?php _e('e', 'epl-staff-directory'); ?> </span>
                                <span><?php echo $epl_author->get_email() ?></span>
                            </div>
                        <?php } ?>
                        <div class="address">
                            <div>377 New South Head Rd</div>
                            <div>Double Bay NSW 2028</div>
                        </div>
                    </div>
                    <div class="contact-block">
                        <?php if ($epl_author->get_author_office_phone() != '') { ?>
                            <div class="office-phone">
                                <h5>
                                    <span><?php _e('p', 'epl-staff-directory'); ?> </span>
                                    <span><?php echo $epl_author->get_author_office_phone() ?></span>
                                </h5>
                            </div>
                        <?php } ?>
                        <?php if ($epl_author->get_author_mobile() != '') { ?>
                            <div class="label-mobile">
                                <h5>
                                    <span><?php _e('m', 'epl-staff-directory'); ?> </span>
                                    <span><?php echo $epl_author->get_author_mobile() ?></span>
                                </h5>
                            </div>
                        <?php } ?>                        
                    </div>
                    <div class="contact-block">
                        <input class="button-primary" type="button" value="Request an appraisal">
                    </div>                    
                </div>
            </div>
        </div>

	<?php
		// allow other extension to add their content on single staff page
		do_action('epl_sd_single_extension');

		wp_link_pages(
			array(
				'before' => '<p><strong>' . __('Pages:', 'epl-staff-directory') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number'
			)
		);
		edit_post_link(__('Edit this entry.', 'epl-staff-directory'), '<p class="edit-entry-link">', '</p>');
	?>
    </div>
</div>
