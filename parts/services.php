<!-- ====== START SERVICES ======  -->
<section class="services sections" id="services" data-scroll-index="1">
	<div class="container">
		<div class="row">


			<!-- SERVICES TITLE START -->
			<div class="col-md-5">
				<div class="serv-title">
					<h4><?php  the_sub_field('services_title'); ?> <span><?php  the_sub_field('services_title_bold'); ?></span> <?php  the_sub_field('services_title_1'); ?> <span><?php  the_sub_field('services_title_bold1'); ?></span></h4>
				</div>
			</div>
			<!-- SERVICES TITLE END -->


			<!-- SERVICES CONTENT START -->
			<div class="serv-cont col-md-7">

				<!-- SERVICE ITEM -->
				<?php 
	        if( have_rows('services_items') ):
	            // loop through the rows of data
	            while ( have_rows('services_items') ) : the_row();
				?>
					<div class="serv-c col-md-6">
						<div class="serv-item">
							<!-- SERVICE ICON -->
							<div class="serv-icon">
								<span class="icon icon-overlay <?php  the_sub_field('service_et_line'); ?>"></span>
								<span class="icon <?php  the_sub_field('service_et_line'); ?>"></span>
							</div>
							<!-- SERVICE CONTENT -->
							<div class="serv-cont">
								<h3><?php  the_sub_field('service_item_title'); ?></h3>
								<p><?php  the_sub_field('service_item_text'); ?></p>
							</div>
						</div>
					</div>
				<?php 
	         	endwhile;
	        else :
	            // no rows found
	        endif;
				?>
			</div>
			<!-- SERVICES CONTENT END -->


		</div>
	</div>
</section>
<!-- ====== END SERVICES ======  -->