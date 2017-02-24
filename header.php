<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title('&ndash;', true, 'right'); bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head/>

  <body <?php body_class(); ?>>

    <!--  ****************************************************** MOBILE NAV **********************************************************-->

    <?php get_template_part( 'template-parts/mobile', 'nav'); ?>

    <!--  ****************************************************** END MOBILE NAV **********************************************************-->

    <!--  ****************************************************** HEADER**********************************************************-->
    <header>
      <div class="contianer">
        <div class="row">

          <div class="col-4 col-6-sm">
            <a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('title'); ?></a>
          </div>

          <div class="col-8 col-6-sm">
            <nav class="main-nav">

              <?php
                $args = array(
                  'menu' => 'primary',
                  'theme_location' => 'primary',
                  'container' => false
                );
                  wp_nav_menu( $args );
               ?>
            </nav><!--end main-nav-->

            <div class="open-menu-icon">
              <img src="<?php bloginfo( 'template_url' ); ?>/images/menu.svg" alt="Menu icon">
            </div>
          </div>

        </div>
      </div>
    </header>
    <!--  ****************************************************** END HEADER **********************************************************-->

    <div class="wrapper-page">
