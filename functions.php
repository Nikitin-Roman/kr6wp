<?php
// отключаем верхний админ бар
function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
// хуки для подключения стилей и скриптов
	add_action( 'wp_enqueue_scripts', 'multix_styles' );
	add_action('wp_enqueue_scripts', 'multix_scripts');
//хук для регистрации меню
	add_action('after_setup_theme', 'theme_after_setup');
// добавляем миниатюру записи
	add_theme_support( 'post-thumbnails' );

// регистрация верхнего меню
	function theme_after_setup(){
		register_nav_menu( 'top', 'Шапка' );
		add_image_size( 'logo-size', 78, 64, true );
	}

	//подключение стилей и скриптов
		function multix_styles(){
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
			wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.css' );
			wp_enqueue_style( 'et-line', get_template_directory_uri() . '/css/et-line-font/et-line-font.css' );
			wp_enqueue_style( 'popup', get_template_directory_uri() . '/css/magnific-popup/magnific-popup.css' );
			wp_enqueue_style( 'popup', get_template_directory_uri() . '/css/magnific-popup/magnific-popup.css' );
			wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.min.css' );
			wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.min.css' );
			wp_enqueue_style( 'font_open', '//fonts.googleapis.com/css?family=Open+Sans:300,400' );
			wp_enqueue_style( 'font_poppins', '//fonts.googleapis.com/css?family=Poppins:700' );
			wp_enqueue_style('style', get_stylesheet_uri());
			wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
			wp_enqueue_style( 'colo', get_template_directory_uri() . '/css/colors/g-red.css' );
		}

		function multix_scripts(){
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], null, true);
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], null, true);
			wp_enqueue_script( 'countto', get_template_directory_uri() . '/js/jquery.countTo.js', [], null, true);
			wp_enqueue_script( 'owlcar', get_template_directory_uri() . '/js/owl.carousel.min.js', [], null, true);
			wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', [], null, true);
			wp_enqueue_script( 'mansory', get_template_directory_uri() . '/js/masonry.pkgd.min.js', [], null, true);
			wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [], null, true);
			wp_enqueue_script( 'parsley', get_template_directory_uri() . '/js/parsley.js', [], null, true);
			wp_enqueue_script( 'scrollit', get_template_directory_uri() . '/js/scrollIt.min.js', [], null, true);
			wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', [], null, true);
		}


		 