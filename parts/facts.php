<!-- ====== START FACTS ======  -->
<section class="sections facts">
	<div class="container">
		<div class="row">


			<!-- START FACTS TITLE -->
			<div class="facts-title col-md-8">
				<h3><span><?php  the_sub_field('facts_title_bold'); ?></span> <?php  the_sub_field('facts_title'); ?> <span><?php  the_sub_field('facts_title_bold1'); ?></span> <?php  the_sub_field('facts_title1'); ?></h3>
				<p><?php  the_sub_field('facts_title1'); ?></p>
			</div>
			<!-- END FACTS TITLE -->


			<!-- START FACTS CONTENT -->
			<div class="facts-c col-md-12">

				<?php 
	        if( have_rows('counter_item') ):
	            // loop through the rows of data
	            while ( have_rows('counter_item') ) : the_row();
				?>
					<div class="fact-item col-md-3">
						<div class="counting-icon">
	                    </div>
	                    <!-- NUMBER -->
	                    <span class="count" data-from="0" data-to="<?php  the_sub_field('counter_number'); ?>">0</span>
	                    <!-- TITLE -->
	                    <h4><?php  the_sub_field('counter_title'); ?></h4>
					</div>
				<?php 
	         	endwhile;
	        else :
	            // no rows found
	        endif;
				?>
			</div>
			<!-- END FACTS CONTENT -->


		</div>
	</div>
</section>
<!-- ====== END FACTS ======  -->