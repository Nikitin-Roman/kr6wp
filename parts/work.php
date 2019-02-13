<!-- ====== START WORK ======  -->
<section class="sections text-center work" id="work" data-scroll-index="3">
	<div class="container">
		<div class="row">


			<!-- START WORK TITLE -->
			<div class="col-md-9 wo-title">
				<h2><?php  the_sub_field('work_title'); ?> <span><?php  the_sub_field('work_title_bold'); ?></span> <?php  the_sub_field('work_title1'); ?> <span><?php  the_sub_field('work_title_bold1'); ?></span></h2>
				<p><?php  the_sub_field('work_subtitle'); ?></p>
			</div>
			<!-- END WORK TITLE -->


			<!-- WORK FILTER BUTTONS -->
			<div class="button-group filter-work">
				<?php if( get_sub_field("all_works_section_name") ): ?>
					<a class="button is-checked" data-filter="*"><?php  the_sub_field('all_works_section_name'); ?></a>
				<?php endif; ?>
					<?php 
						$terms = get_terms( array(
				      'hide_empty'  => 0,  
				      'orderby'     => 'id',
				      'order'       => 'DESC',
				      'taxonomy'    => 'portfolio_category',
				      'pad_counts'  => 1
						) );

						if( $terms && ! is_wp_error($terms) ){
						  foreach( $terms as $term ){
						      echo "<a class='button'  data-filter='.$term->slug'>". $term->name ."</a>";
						  }
						}
			    ?>
			</div>
			<!-- END WORK FILTER BUTTONS -->

		</div>
	</div>


	<!-- WORK CONTENT START -->
	<div class="work-content">

		<?php 
	    $args = array('post_type' => 'portfolio', 'posts_per_page' => 8);
	    $loop = new WP_Query($args);

	    if( $loop ->have_posts() ):
	        while( $loop->have_posts() ): $loop->the_post();
		?>

			<div class="work-item 
				<?php $terms_list = wp_get_post_terms($post->ID, 'portfolio_category');
					foreach( $terms_list as $term ) {
						echo $term->slug . ' ';
					}
				?>
			">
				<div class="work-caption"> 
					<!-- WORK IMAGE -->
			  		<img src="<?php the_post_thumbnail_url('', "portfolio-image"); ?>" alt="
				  		<?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
										$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);  
										echo $alt; 
							?>" 
						/>

			  		<!-- WORK TITLE -->
				  	<div class="overlay">
				  		<div class="info-content">
					  		<h4><?php the_title();  ?></h4>
					  		<p>
									<?php $terms = get_the_terms( $post->ID , 'portfolio_category');
						  			foreach ( $terms as $term ) {
						  			  echo $term->name . ' ';
						  			} 
					  			?>
					  		</p>
						</div>
						<div class="know-more">
							<a class="modal-image" href="<?php the_post_thumbnail_url('', "portfolio-image"); ?>">
								<span class="icon icon-focus"></span>
							</a>
						</div>
				  	</div>
				</div>
			</div>		

		<?php endwhile;
			endif;
			wp_reset_query();
		?>

	</div>
	<!-- WORK CONTENT END -->


</section>
<!-- ====== END WORK ======  -->