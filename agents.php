<div class="agents-container">
  <div class="agents-container-title">
    <h5>Our Agents</h5>
  </div>

  <div class="agents-carousel">
  <?php 
      $users = get_users( array( 'fields' => array( 'ID' ) ) );
      foreach($users as $user_id) {
          $epl_author = new EPL_Author_meta( $user_id->ID );
          $name = $epl_author->name;
          $position = $epl_author->get_author_position();
          $mobile = $epl_author->get_author_mobile();
          $slogan = $epl_author->get_author_slogan();
          $permalink = apply_filters( 'epl_author_profile_link', get_author_posts_url( $epl_author->author_id ), $epl_author );
  ?>
    <div class="agent-block">
        <div class="agent-image-box">
          <!-- Featured Image -->
          <a href="<?php echo $permalink ?>">
            <?php do_action('epl_author_thumbnail',$epl_author); ?>
          </a>
      </div>
      <div class="agent-info-box">
          <div class="agent-details-box">
            <h5 class="agent-name"><?php echo ($name); ?></h5>
            <h6>
              <span class="agent-position"><?php echo ($position); ?>
              <span class="agent-mobile"><?php  echo ($epl_author->get_author_mobile()); ?>
            </h6>
          </div>
          <div class="agent-slogan-box">
            <h6><?php echo ($slogan); ?></h6>
          </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>

