<?php 
	$footer_logo = get_sub_field('footer_logo');
?>

		<!-- ====== START FOOTER ======  -->
		<section class="sections footer">
			<div class="container">
				<div class="row">


					<!-- START FOOTER LOGO -->
					<div class="ft-logo col-md-3 col-sm-4 col-xs-7">
						<?php echo ($footer_logo) ? '<img width="80" src="'.$footer_logo["sizes"]["footer-logo"].'" alt="'.$footer_logo["alt"].'">' : '' ?>
					</div>
					<!-- END FOOTER LOGO -->


					<!-- START SOCIAL ICONS -->
					<div class="sc-icon">
						<?php 
			        if( have_rows('footer_social') ):
			            // loop through the rows of data
			            while ( have_rows('footer_social') ) : the_row();
						?>
							<a href="<?php  the_sub_field('footer_social_url'); ?>">
								<span>
									<i class="fa <?php  the_sub_field('fa_icon_code'); ?>" aria-hidden="true"></i>
								</span>
							</a>
						<?php 
			         	endwhile;
			        else :
			            // no rows found
			        endif;
						?>
					</div>
					<!-- END SOCIAL ICONS -->


					<!-- START RIGHTS -->
					<div class="sub-footer">
						<h5><?php  the_sub_field('footer_copyright'); ?></h5>
					</div>


				</div>
			</div>
		</section>
		<!-- ====== END FOOTER ======  -->

		<?php wp_footer(); ?>
	</body>
</html>