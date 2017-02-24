<?php get_header(); ?>

<div id="blog" class="pd10">
<!--  ****************************************************** INNER SECTION *********************************************************-->
<section class="inner-section">
    <h1>Eaki blog</h1>
</section><!--end inner-section-->
<!--  ****************************************************** END INNER SECTION *********************************************************-->

<!--  ****************************************************** BLOG POSTS ARTICLE *********************************************************-->
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php if(have_posts()): ?>
          <?php while(have_posts()) : the_post(); ?>

            <article class="blog-posts">
              <div class="row">

                <div class="col-4 col-12-sm">
                  <?php if(has_post_thumbnail()): ?>
                    <div class="post-thumb">
                        <?php the_post_thumbnail('small-thumbnail'); ?>
                    </div><!--end post-thumb-->
                  <?php endif; ?>
                </div><!--end col-->

                <div class="col-8 col-12-sm">
                  <h3 class="post-title"><?php the_title(); ?> </h3>
                  <h6 class="post-time"><?php  the_time('d. F. Y'); ?></h6>
                  <div class="post-content"><?php the_excerpt(); ?></div>
                  <a href="<?php the_permalink(); ?>" class="post-link">Read Full Post</a>
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
