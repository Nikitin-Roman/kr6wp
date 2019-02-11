<?php
	/** Template Name: Landing Page */
?>
			<?php
        if( have_rows('page_builder') ):

             // loop through the rows of data
            while ( have_rows('page_builder') ) : the_row();

    	         if( get_row_layout() == 'header_section' ):
    							 	get_header(); 
    	         endif;

                if( get_row_layout() == 'about' ):
       						 	get_template_part('parts/about'); 
                endif;

								if( get_row_layout() == 'experiences' ):
									 	get_template_part('parts/experiences');
								endif;

								if( get_row_layout() == 'services' ):
									 	get_template_part('parts/services');
								endif;
								
								if( get_row_layout() == 'work' ):
									 	get_template_part('parts/work');
								endif;
								
								if( get_row_layout() == 'facts' ):
									 	get_template_part('parts/facts');
								endif;
								
								if( get_row_layout() == 'prices' ):
									 	get_template_part('parts/prices');
								endif;

								if( get_row_layout() == 'testimonials' ):
									 	get_template_part('parts/testimonials');
								endif;

								if( get_row_layout() == 'contact' ):
									 	get_template_part('parts/contact');
								endif;

								if( get_row_layout() == 'footer' ):
									 	get_footer();
								endif;
								
            endwhile;

        else :

            // no layouts found

        endif;

        ?>


