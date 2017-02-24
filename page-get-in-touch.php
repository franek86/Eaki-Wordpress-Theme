<?php
  /*
  Template Name: Get in touch
  */
?>
<?php get_header(); ?>
<div id="get-in-touch-page" class="pd10">

  <section class="inner-section">
    <h1><?php  the_title(); ?></h1>
  </section><!--end inner-section-->

  <div class="container">
      <!-- <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?> -->


            <div class="row">

              <div class="col-6 col-12-sm">
                <?php echo do_shortcode(' [contact-form-7 id="145" title="Contact form 1"] '); ?>
              </div>

              <div class="col-6 col-12-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6877.106637211124!2d15.95967393932872!3d45.79718392470018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d692c902cc39%3A0x3a45249628fbc28a!2sZagreb%2C+Hrvatska!5e0!3m2!1shr!2shu!4v1487591826918" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>

              </div>

            </div><!--end row -->

<!--
      <?php endwhile; ?>
    <?php else : ?>

      <h4> <?php echo __('No Image Found!'); ?> </h4>

    <?php endif; ?> -->
  </div><!--end container-->
</div><!--end get-in-touch-->

<?php get_footer(); ?>
