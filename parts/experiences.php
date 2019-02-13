		<!-- ====== START EXPERIENCES ======  -->
		<section class="sections experiences">
			<div class="container">
				<div class="row">


					<!-- START EXPERIENCES LEFT SIDE -->
					<div class="col-md-5 exp-lf">
						<h3><?php  the_sub_field('experiences_title'); ?> <span><?php  the_sub_field('experiences_title_bold'); ?></span> <?php  the_sub_field('experiences_title1'); ?> <span><?php  the_sub_field('experiences_title_bold1'); ?></span></h3>
						<p><?php  the_sub_field('experiences_text'); ?></p>
					</div>
					<!-- END EXPERIENCES LEFT SIDE -->


					<!-- START SKILLS -->
                	<div class="skills col-md-7">
						<ul>
							<?php 
				        if( have_rows('skills') ):
				            // loop through the rows of data
				            while ( have_rows('skills') ) : the_row();
							?>
								<li>
									<span><?php  the_sub_field('skill_name'); ?></span>
									<div class="progress">
										<div class="progress-bar" data-percent="<?php  the_sub_field('skill_percent'); ?>" style="width: <?php  the_sub_field('skill_percent'); ?>%;">
						          <span><?php  the_sub_field('skill_percent'); ?>%</span>
						        </div>
					        </div>
								</li>
							<?php 
				         	endwhile;
				        else :
				            // no rows found
				        endif;
							?>
						</ul>

	                </div>
	                <!-- END SKILLS -->

				</div>
			</div>
		</section>
		<!-- ====== END EXPERIENCES ======  -->