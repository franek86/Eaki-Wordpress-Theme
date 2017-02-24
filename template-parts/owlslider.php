<div class="owl-carousel">

    <?php
      $args = array(
        'post_type' => 'slider',
      );
      $slider_query = new WP_Query( $args );
    ?>

    <?php if(have_posts()): ?>
      <?php while($slider_query->have_posts()) : $slider_query->the_post(); ?>


          <div class="slide-item">
            <?php the_post_thumbnail('slide-image'); ?>
            <div class="slide-caption">
              <h3><?php the_title(); ?> </h3>
              <?php the_content(); ?> 
            </div>
          </div>


        <?php endwhile; ?>
      <?php endif; ?>


</div><!--end owl-carousel -->
