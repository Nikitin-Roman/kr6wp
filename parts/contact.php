<!-- ====== START CONTACT ======  -->
<section class="sections contact" id="contact" data-scroll-index="5">
	<div class="container">
		<div class="row">


			<!-- START CONTACT SECTION TITLE -->
			<div class="cont-title col-md-5">
				<h3><?php  the_sub_field('contact_title'); ?> <span><?php  the_sub_field('contact_title_bold'); ?></span> <?php  the_sub_field('contact_title1'); ?> <span><?php  the_sub_field('contact_title_bold1'); ?></span></h3>
				<p><?php  the_sub_field('contact_subtitle'); ?></p>
				<ul class="info">
					<?php 
		        if( have_rows('contact_information') ):
		            // loop through the rows of data
		            while ( have_rows('contact_information') ) : the_row();
					?>
						<li>
							<span class="icon <?php  the_sub_field('contact_et-line'); ?>"></span>
							<p><?php  the_sub_field('contact_punct'); ?></p>
						</li>
					<?php 
		         	endwhile;
		        else :
		            // no rows found
		        endif;
					?>
				</ul>
			</div>
			<!-- END CONTACT SECTION TITLE -->


			<!-- START CONTACT FORM -->
			<div class="contact-form col-md-7">
				<form action="http://joker-themes.com/multix-dd/demos/Waves-Version/php/contact.php" method="POST" class="cont-fo">


					<div class="contact-item col-md-12">
						<input type="text" name="name" placeholder="Name *" required="required">
					</div>
					<div class="contact-item col-md-12">
						<input type="email" name="email" placeholder="Email *" required="required">
					</div>
					<div class="contact-item col-md-12">
						<input type="text" name="subject" placeholder="Subject">
					</div>
					<div class="contact-item col-md-12">
						<textarea id="form_message" name="message" placeholder="Message *" rows="4" required="required" data-error="Message."></textarea>
					</div>
					<div class="contact-item col-md-12">
						<input type="submit" class="button disabled" value="<?php  the_sub_field('contact_button_text'); ?>">
					</div>


				</form>
			</div>
			<!-- END CONTACT FORM -->


		</div>
	</div>
</section>
<!-- ====== END CONTACT ======  -->