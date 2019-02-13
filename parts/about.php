<?php 
	$about_img = get_sub_field('about_image');
?>

<!-- ====== START ABOUT ======  -->
<section class="sections about" id="about" data-scroll-index="2">
	<div class="container">
		<div class="row">


			<!-- START ABOUT PICTURE -->
			<div class="col-lg-4 col-md-5 ab-pic">
				<?php echo ($about_img) ? '<img style="width: 100%;" src="'.$about_img["sizes"]["about-image"].'" alt="'.$about_img["alt"].'">' : '' ?>
			</div>
			<!-- END ABOUT PICTURE -->


			<!-- START ABOUT CONTENT -->
			<div class="col-lg-8 col-md-7 ab-cont">

				<h3><?php  the_sub_field('about_title'); ?> <span><?php  the_sub_field('about_title_bold'); ?></span> <?php  the_sub_field('about_title1'); ?> <span><?php  the_sub_field('about_title_bold1'); ?></span></h3>
				<?php 
	        if( have_rows('about_text') ):
	            // loop through the rows of data
	            while ( have_rows('about_text') ) : the_row();
				?>
				<p><?php  the_sub_field('about_paragraph'); ?></p>
				<?php 
	         	endwhile;
	        else :
	            // no rows found
	        endif;
				?>
				<div class="features">

					<?php 
		        if( have_rows('about_features') ):
		            // loop through the rows of data
		            while ( have_rows('about_features') ) : the_row();
					?>
						<p>
							<span class="icon <?php  the_sub_field('et_line_icon_name'); ?>"></span>
							<?php  the_sub_field('feature_text'); ?>
						</p>
					<?php 
		         	endwhile;
		        else :
		            // no rows found
		        endif;
					?>

				</div>

			</div>
			<!-- END ABOUT CONTENT -->


		</div>
	</div>
</section>
<!-- ====== END ABOUT ======  -->