<?php get_header(); ?>

<div id="blog" class="pd10">
<!--  ****************************************************** BLOG POSTS ARTICLE *********************************************************-->
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php if(have_posts()): ?>
          <?php while(have_posts()) : the_post(); ?>

            <h3 class="post-title"><?php the_title(); ?> </h3>

            <?php if(has_post_thumbnail()): ?>
              <div class="post-thumb">
                  <?php the_post_thumbnail('banner-image'); ?>
              </div><!--end post-thumb-->
            <?php endif; ?>

            <article class="blog-posts">
              <div class="row">

                <div class="col-3 col-12-sm">
                  <h6 class="post-time"><?php  the_time('d, F, Y'); ?></h6>

                  <h6 class="post-author">
                    Author:
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                      <?php  the_author(); ?>
                    </a>
                  </h6>

                </div><!--end col-->

                <div class="col-9 col-12-sm">
                  <div class="post-content"><?php the_content(); ?></div>
                  <a href="<?php the_permalink(14); ?>" class="post-link">Back to blog</a>
                </div><!--end col-->

              </div><!--end row -->
            </article><!--end blog-posts-->

        <?php endwhile; ?>
      <?php else : ?>

        <h4> <?php echo __('No Post Found!'); ?> </h4>

      <?php endif; ?>

      </div><!--end col-12-->
    </div><!--end row-->
  </div><!--end container-->

<!--  ****************************************************** END BLOG POSTS ARTICLE *********************************************************-->
</div><!--end blog-->



<?php get_footer(); ?>
