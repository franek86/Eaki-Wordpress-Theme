<?php get_header(); ?>

  <section class="inner-section">
      <h1><?php  the_title(); ?></h1>
  </section><!--end inner-section-->

  <div id="page">
    <div class="container">
        <?php if(have_posts()): ?>
          <?php while(have_posts()) : the_post(); ?>


              <div class="row">

                <div class="col-12 col-12-sm">
                  <?php the_content(); ?>
                </div>

              </div><!--end row -->


        <?php endwhile; ?>
      <?php else : ?>

        <h4> <?php echo __('No Image Found!'); ?> </h4>

      <?php endif; ?>
    </div><!--end container-->
  </div><!-- end page-->

<?php get_footer(); ?>
