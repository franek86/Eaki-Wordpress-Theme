<?php
		/*=====================================

		enqueue functions

		=======================================*/
		function eaki_load_scripts(){
			wp_enqueue_style( 'eaki-custom-style', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all'  );

	    wp_enqueue_script( 'eaki-vendors-scripts' , get_template_directory_uri() .'/js/vendors.min.js', array(), '1.0.0', 'true'  );

	    wp_enqueue_script( 'eaki-custom-scripts' , get_template_directory_uri() .'/js/custom.min.js', array(), '1.0.0', 'true'  );

		}
		add_action( 'wp_enqueue_scripts', 'eaki_load_scripts');


		/*=======================================

		activate nav menu option

		========================================*/
		function eaki_register_nav(){
			register_nav_menus(array(
				'primary' => __('Main Navigation Menu'),
				'footer' => __('Footer Navigation Menu')
			));
		}
		add_action('after_setup_theme', 'eaki_register_nav');

		/*=======================================

		activate thumbnails

		========================================*/
		add_theme_support( 'post-thumbnails' );
		add_image_size('small-thumbnail', 500, 500, true);
		add_image_size('banner-image', 1200, 400, true);
		add_image_size('slide-image', 1500, auto, true);
		add_image_size('inner-image', auto, auto, true);



		/* ===================================

		remove version string from js and css

		=====================================*/
		function eaki_remove_wp_version_strings( $src ) {

			global $wp_version;
			parse_str( parse_url($src, PHP_URL_QUERY), $query );
			if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
				$src = remove_query_arg( 'ver', $src );
			}
			return $src;

		}
		add_filter( 'script_loader_src', 'eaki_remove_wp_version_strings' );
		add_filter( 'style_loader_src', 'eaki_remove_wp_version_strings' );

		/*==========================================

		 remove metatag generator from header

		===========================================*/
		function eaki_remove_meta_version() {
			return '';
		}
		add_filter( 'the_generator', 'eaki_remove_meta_version' );


		/*==========================================

		 excerpt length and remove dots from excerpt

		===========================================*/
		function custom_excerpt_length( $length ) {
	    return 60;//change the number for the length you want
		}
		add_filter( 'excerpt_length', 'custom_excerpt_length' );

		function new_excerpt_more( $more ) {
			return '.';
		}
		add_filter('excerpt_more', 'new_excerpt_more');

		/*==========================================

		 support svg images

		===========================================*/
		function add_file_types_to_uploads($file_types){

		    $new_filetypes = array();
		    $new_filetypes['svg'] = 'image/svg+xml';
		    $file_types = array_merge($file_types, $new_filetypes );

		    return $file_types;
		}
		add_action('upload_mimes', 'add_file_types_to_uploads');
	

		/*==========================================

		 widgets area

		===========================================*/
		function create_widgets(){
			$args = array(
				'name' => 'Social Media Footer',
				'id' => 'social-icons',
				'description' => 'Footer Social Media Widget.',
				'before_widget' => '<div class="social-networks">',
				'after_widget' => '</div>',
				'before_title' => '<h5>',
				'after_title' => '</h5>'
				);

				register_sidebar( $args );

		}
		add_action('widgets_init', 'create_widgets');
