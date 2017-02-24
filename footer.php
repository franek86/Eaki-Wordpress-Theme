
      <!--  ****************************************************** FOOTER **********************************************************-->
      <footer>
        <div class="container">
          <div class="row">

            <div class="col-2 col-12-sm">
              <div class="company">
                <h5><?php bloginfo('title');?></h5>
                <nav class="footer-menu">

                  <?php
                    $args = array(
                      'theme_location' => 'footer',
                      'container' => false
                    );
                    wp_nav_menu( $args );
                   ?>

                </nav>
              </div>
            </div>

            <div class="col-8 col-12-sm">
              <div class="social-networks">
                <h5>Follow Us</h5>
                <div class="social-icons">
                  <ul>
                    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook-icon.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter-icon.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/instagram-icon.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/youtube-icon.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/images/linkedin-icon.svg" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-2 col-12-sm">
              <div class="contact">
                <h5>Contact</h5>
                <ul>
                  <li><a href="#">Trg Bana Joispa Jelačića, 10000 Zagreb</a></li>
                  <li><a href="#">&plus;38501234-720</a></li>
                  <li><a href="mailto:eaki@mail.com">eaki&commat;mail.com</a></li>
                  <li><a href="<?php echo home_url(); ?>">&copy; <?php echo date('Y');?>&middot;<?php bloginfo('name'); ?> </a></li>
                </ul>
              </div>
            </div>

          </div><!--end row-->
        </div><!--end container--->
      </footer><!--end footer -->
      <!--  ****************************************************** END FOOTER **********************************************************-->

      </div><!--end wrapper page-->

    <?php wp_footer(); ?>
    </body>
  </html>
