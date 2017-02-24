<?php get_header(); ?>

<div id="single-work" class="pd10">

  <section class="inner-section">
    <?php the_post_thumbnail('inner-image'); ?>
  </section><!--end inner-section-->
  <!--  ****************************************************** SINGLE WORK *********************************************************-->
  <div class="container">

        <?php if(have_posts()): ?>
          <?php while(have_posts()) : the_post(); ?>

              <div class="row">
                <div class="col-12 col-12-sm">
                  <h2 class="post-title"> <?php the_title(); ?> </h2>
                  <div class="post-content"><?php the_content(); ?></div>
                  <a href="<?php the_permalink(7); ?>" class="post-link">Back to Works</a>
                </div><!--end col-->
              </div><!--end row -->

        <?php endwhile; ?>
      <?php else : ?>

        <h4> <?php echo __('No Post Found!'); ?> </h4>

      <?php endif; ?>
  </div><!--end container-->

<!--  ****************************************************** END BLOG POSTS ARTICLE *********************************************************-->
</div><!--end single work-->



<?php get_footer(); ?>
