<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">

		<!-- Always force latest IE rendering engine -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo get_sub_field('favicon')['url']; ?>">
		<!-- TITLE -->
		<title><?php bloginfo('name') ?></title>

		<?php wp_head(); ?>
	</head>
	<body>


		<!-- ====== Preloader ======  -->
<!--   	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>  -->
		<!-- ======End Preloader ======  -->

		<!-- ====== HEADER START ======  -->

		<?php 

		$rows = get_sub_field('hs_background_images' ); // get all the rows
		$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
		$rand_row_image = $rand_row['hs_background_image' ]; // get the sub field value 
		?>
		<section class="s-header" id="home" data-scroll-index="0" style = "background-image: url(<?php echo $rand_row_image['url'];?>);">
			<div class="header-overlay">

				<!-- ====== NAVGITION ======  -->
				<nav class="navbar land-nav">
					<div class="container">
						<div class="row">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>
								<!-- logo -->
								<a class="logo navbar-brand" href="<?php the_sub_field('header_logo_url'); ?>" data-scroll-nav="0">

									<!-- WHITE LOGO -->
									<img class="white-logo" width="200" src="<?php echo get_sub_field('hs_header_logo')['url']; ?>" alt="logo" />

									<!-- DARK LOGO -->
									<img class="dark-logo" width="200" src="<?php echo get_sub_field('header_logo_scroll')['url']; ?>" alt="logo" />

								</a>
							</div>

							<!-- Collect the nav links, and other content for toggling -->
							<div class="collapse navbar-collapse" id="collapse">

								<!-- links -->

								<?php
									$i = 1;
									$format = '0%d';
									wp_nav_menu( array(
										'theme_location'  => 'top',
										'menu'            => '', 
										'container'       => 'div', 
										'container_class' => '', 
										'container_id'    => '',
										'menu_class'      => 'menu', 
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
										'depth'           => 0,
										'walker'          => '',
									) );
								?>
							</div><!-- /.navbar-collapse -->
						</div>
					</div><!-- /.container -->
				</nav>
				<!-- ====== END NAVGITION ======  -->


				<!-- ====== START HEADER CONTENT ======  -->
				<div class="middle-c text-center">
					<div class="container">
						<div class="row">
							<div class="capt col-md-8 col-sm-11">

								<h1><?php  the_sub_field('header_title'); ?> <span><?php  the_sub_field('header_title_bold'); ?></span> <?php  the_sub_field('header_title1'); ?> <span><?php  the_sub_field('header_title_bold1'); ?></span>
								</h1>

								<a href="<?php  the_sub_field('header_button_link'); ?>" data-scroll-nav="2" class="cta-btn">
									<?php  the_sub_field('header_button_name'); ?>
								</a>

							</div>
						</div>
					</div>
				</div>
				<!-- ====== END HEADER CONTENT ======  -->


				<div class="header-shap">
	                <img src="<?php  echo get_sub_field('bottom_shape')['url']; ?>" alt="Shape">
	            </div>


			</div>
		</section>
		<!-- ====== END HEADER ======  -->