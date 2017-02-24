<?php
  /*
    Template Name: Work Page
  */
?>
<?php get_header(); ?>

<div id="work-page" class="pd10">

  <section class="inner-section">
      <h1><?php  the_title(); ?></h1>
  </section><!--end inner-section-->

<?php
  $args = array(
    'post_type' => 'portfolio',
  );
  $work_query = new WP_Query( $args );
?>

  <div class="container">
    <div class="row">

      <div class="col-12 col-12-sm">
      <?php if($work_query->have_posts()): ?>
        <?php while($work_query->have_posts()) : $work_query->the_post(); ?>

          <div class="row work-wrapper">

            <div class="col-6 col-12-sm">
              <?php if(has_post_thumbnail()): ?>
                <div class="work">
                  <div class="work-image">
                      <?php the_post_thumbnail('small-thumbnail'); ?>
                  </div><!--end work-image-->
                </div>
              <?php endif; ?>
            </div>

            <div class="col-6 col-12-sm">
                  <div class="work-desc">
                      <?php the_content();?>  
                      <a href="<?php the_permalink();?>" class="btn-more">See <?php the_title();?></a>
                  </div>
            </div><!--end col-->

          </div><!--end row-->

          <br /> <br />

        <?php endwhile; ?>
      <?php else : ?>

      <h4> <?php echo __('No Post Found!'); ?> </h4>

      <?php endif; ?>
    </div><!--end col-->
    </div><!--end row -->
  </div><!--end container-->

</div><!--end work-page-->

<?php get_footer(); ?>
