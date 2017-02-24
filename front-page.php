<?php /*Template Name: Front Page*/  ?>
<?php get_header(); ?>

  <div id="home" class="pd10">
  <!--  ****************************************************** INNER SECTION *********************************************************-->
  <section class="slide-section">
    <?php  get_template_part( 'template-parts/owlslider'); ?>
  </section><!--end slide-section-->
  <!--  ****************************************************** END INNER SECTION *********************************************************-->

  <!--  ****************************************************** FEAUTURED PROJECTS **********************************************************-->
  <section class="feautured-projects">

    <h4>Feauturd Projects</h4>

    <?php
      $last_works = new WP_Query( 'post_type=portfolio&posts_per_page=4' );
    ?>

    <div class="container">
      <div class="row">

          <?php if($last_works->have_posts()): ?>
            <?php while($last_works->have_posts()) : $last_works->the_post(); ?>

              <div class="col-6 col-12-sm feautured-projects-img">
                <div class="overlay-btn"><a href="<?php the_permalink(); ?>" class="btn-click">Click</a></div>
                <div class="responsive-img">
                  <?php the_post_thumbnail();?>
                </div>
              </div>

            <?php endwhile; ?>
          <?php
            endif;
            wp_reset_postdata();
          ?>

      </div><!--end row-->
    </div><!--end container-->

  </section><!--end feautured-projects-->
  <!--  ****************************************************** END FEAUTURED PROJECTS *********************************************************-->
</div><!--end home-page-->

<?php get_footer(); ?>
