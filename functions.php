<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
	wp_enqueue_style( 'font', 'http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700');
	wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/vendor/simple-line-icons/simple-line-icons.min.css');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri()  . '/assets/vendor/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/css/swiper.min.css');
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.min.css');
	wp_enqueue_style( 'favicon', get_template_directory_uri() . '/favicon.ico');


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('migrate', get_template_directory_uri() . '/assets/vendor/jquery-migrate.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/vendor/jquery.easing.js', array('jquery'), 'null', true);
	wp_enqueue_script('back-to-top', get_template_directory_uri() . '/assets/vendor/jquery.back-to-top.js', array('jquery'), 'null', true);
	wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/vendor/jquery.smooth-scroll.js', array('jquery'), 'null', true);
	wp_enqueue_script('jquery-wow', get_template_directory_uri() . '/assets/vendor/jquery.wow.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('jquery-swiper', get_template_directory_uri() . '/assets/vendor/swiper/js/swiper.jquery.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('jquery-masonry', get_template_directory_uri() . '/assets/vendor/masonry/jquery.masonry.pkgd.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/masonry/imagesloaded.pkgd.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('layout', get_template_directory_uri() . '/assets/js/components/layout.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/components/wow.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/components/swiper.min.js', array('jquery'), 'null', true);
	wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/components/masonry.min.js', array('jquery'), 'null', true);

}

// <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
//         <!-- CORE PLUGINS -->
//         <!-- <script src="vendor/jquery.min.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->

//         <!-- PAGE LEVEL PLUGINS -->
//         <!-- <script src="vendor/jquery.easing.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/jquery.wow.min.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script> -->
//         <!-- <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script> -->

//         <!-- PAGE LEVEL SCRIPTS -->
//         <!-- <script src="js/layout.min.js" type="text/javascript"></script> -->
//         <!-- <script src="js/components/wow.min.js" type="text/javascript"></script> -->
//         <!-- <script src="js/components/swiper.min.js" type="text/javascript"></script> -->
//         <!-- <script src="js/components/masonry.min.js" type="text/javascript"></script> -->

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');



