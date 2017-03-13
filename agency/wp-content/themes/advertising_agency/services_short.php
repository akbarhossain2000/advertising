<style type="text/css">
#categories {
	margin: 0 0 30px 0 !important;
}

</style>

<!--SERVICES-->
    <section id="categories">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <a href="#"><h2>SERVICES</h2></a>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php
					
					$service_item = array(
							'post_type'		=> 'services',
							'posts_per_page'=> 4
					);
					
					$serviceimg = new WP_Query($service_item);
					
					while($serviceimg->have_posts()): $serviceimg->the_post();
					
						$service_id		= get_post_thumbnail_id();
						$service_url 	= wp_get_attachment_image_src($service_id, 'portfolio_images', true);
				
				?>
							<div class="col-sm-4">
								<div class="category">
									<div class="category-icon">
										<i class="fa fa-briefcase fa-2x"></i>
									</div>
									<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
									<div class="row">
										<div class="col-sm-12">
											<a href=""><img src="<?php echo $service_url[0];?>" alt="service image" /></a>
										</div>
										<div class="col-sm-12">
											<p><?php echo wp_trim_words(get_the_content(), 30)."  "?></br><a href="<?php the_permalink(); ?>"><span><i class="fa fa-angle-double-right"></i></span> more details</a></p>
										</div>
									</div>
									
								</div>
							</div>
				
				<?php endwhile; ?>
				
            </div>
            
        </div>
    </section><!--End SERVICES-->