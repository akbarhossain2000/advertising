<?php

/*
	Template Name: Contact US
*/

get_header();
?>
<!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->
<!--map-->
	<section id="map">
		<!--map-->
		<div class="map margin-control">
			<div class="map-canvas">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694484722!2d90.3671072226942!3d23.747050044458557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C+Dhaka%2C+Bangladesh!5e0!3m2!1sen!2s!4v1475693394807" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div><!--end map-->
	</section>
<!--end map-->




<!--Detail -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<div id="form">
						<?php	
							//echo do_shortcode('[contact-form-7 id="122" title="contact us"]');
						?>
						
						<?php 
							if(have_posts()) : while(have_posts()) : the_post();
						?>

						<?php the_content(); ?>


						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
            </div>
        </div>
    </section><!--end details-->



<?php get_footer(); ?>