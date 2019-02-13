<!-- ====== START TESTIMONIALS ======  -->
<section class="testimonials text-center" style="background: url('<?php echo get_sub_field("testimonials_background_image")["url"]; ?>');">
	<div class="testimonials-overlay sections">
		<div class="container">
			<div class="row">


				<div class="title">
					<h3><?php  the_sub_field('testimonials_title'); ?> <span><?php  the_sub_field('testimonials_title_bold'); ?></span></h3>
					<div class="devider"></div>
				</div>


				<div class="owl-carousel owl-theme">

					<!-- TESTIMONIALS ITEM -->
					<?php 
		        if( have_rows('testimonial') ):
		            // loop through the rows of data
		            while ( have_rows('testimonial') ) : the_row();
					?>
						<div class="t-item">
							<div class="testimonial-box col-md-8 col-xs-12">
								<p><?php  the_sub_field('testimonial_text'); ?></p>
								<!-- TESTIMONIAL NAME -->
								<h3><?php  the_sub_field('testimonial_author'); ?><span><?php  the_sub_field('testimonial_author_position'); ?></span></h3>
							</div>
						</div>
					<?php 
		         	endwhile;
		        else :
		            // no rows found
		        endif;
					?>
				</div>


			</div>
		</div>
	</div>
</section>
<!-- ====== END TESTIMONIALS ======  -->