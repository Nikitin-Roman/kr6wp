<!-- ====== START PRICES ======  -->
<section class="sections prices" id="price" data-scroll-index="4">
	<div class="container">
		<div class="row">

			<!-- START PRICE TITLE -->
			<div class="price-title col-md-4">
				<h3><?php  the_sub_field('prices_title'); ?> <span><?php  the_sub_field('prices_title_bold'); ?></span> <?php  the_sub_field('prices_title1'); ?> <span><?php  the_sub_field('prices_title_bold1'); ?></span> <?php  the_sub_field('prices_title2'); ?></h3>

				<!-- START PRICING TABLES TABS -->
				<div class="pricing-tabs">
						<?php 
					    if( have_rows('prices_groups') ): ?>
					<ul class="price-tabs" role="tablist">
						     <?php $i = 0;  while ( have_rows('prices_groups') ) : the_row();
							?>
					    <li role="presentation" <?php if($i == 0) { ?>class="active"<?php } ?>>
						    	<a href="index.html#<?php  the_sub_field('prices_group_name'); ?>" aria-controls="<?php  the_sub_field('prices_group_name'); ?>" role="tab" data-toggle="tab">
						    		<?php  the_sub_field('prices_group_name'); ?>
						    	</a>
						</li>
							<?php 
								$i++;
						    endwhile;
							?>  
					</ul>
				</div>
				<!-- END PRICING TABLES TABS -->

			</div>
			<!-- END PRICE TITLE -->


			<!-- START PRICING TABLES -->
			<div class="pric-tables col-md-8">

				<!-- START PRICING TABLES CONTENT -->
				<div class="tab-content">


				<?php 
					$i = 0;
					while ( have_rows('prices_groups') ) : the_row(); ?>
					<div role="tabpanel" class="tab-pane fade <?php if ($i==0) { ?>in active<?php } ?>" id="<?php  the_sub_field('prices_group_name'); ?>">
				<?php
				while (have_rows('prices_group_tariffs')) {
				    the_row();
				    ?>
						<div class="price-table col-md-6">

							<div class="item text-center">
								<div class="type">
									<h5><?php  the_sub_field('tariff_name'); ?></h5>
								</div>
								<div class="mount">
									<h3><?php  the_sub_field('tariff_price'); ?><span>/<?php  the_sub_field('tariff_period'); ?></span></h3>
								</div>
								<div class="pfeat">
									<?php 
						        if( have_rows('tariff_features') ):
						            while ( have_rows('tariff_features') ) : the_row();
									?>
									<p>
										<?php if( get_sub_field('tariff_feature_sign') == 'checked' ): ?>
											<i class="fa green fa-check-circle"></i> 
										<?php elseif ( get_sub_field('tariff_feature_sign') == 'unchecked' ): ?>
											<i class="fa red fa-times-circle"></i> 
										<?php endif; ?>
										<?php  the_sub_field('tariff_feature_name'); ?>
									</p>
									<?php 
									            endwhile;
									        else :
									            // no rows found
									        endif;
									?>  
								</div>
								<div class="order">
									<a href="index.html#">
										<?php  the_sub_field('tariff_button_name'); ?>
									</a>
								</div>
							</div>

						</div>
						<!-- PRICE TABLE END -->

						<?php
							} 
						?>


				</div>
				<?php $i++; endwhile; ?>

			</div>
			<!-- END PRICING TABLES --> 		
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- ====== END PRICES ======  -->