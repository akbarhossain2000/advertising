<!--PortFolio Area-->
    <section id="premium">
	
		
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <a href="#"><h2>PORTFOLIO</h2></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel">

					<?php  
						$port_item = array(
								'post_type' 	=> 'portfolio',
								'posts_per_page'=> 8
						);
						
						$portimg	=	new WP_Query($port_item);
						
					?>
					
					<?php 
					
						while($portimg->have_posts()): $portimg->the_post();
						$portimg_id		= get_post_thumbnail_id();
						$portimg_url	= wp_get_attachment_image_src($portimg_id, 'portfolio_images', true);
						$port_full_img_url	= wp_get_attachment_image_src($portimg_id, '', true);
					?>
					
			                    <div class="item">
			                        <a href="#"><img src="<?php echo $portimg_url[0];?>" alt="carousel"></a>
			                        <div class="item-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></div>
			                        <a class="item-hover example-image-link" href="<?php echo $port_full_img_url[0];  ?>" data-lightbox1="example-set">
										<span>Click to Large view</span>
									</a>
			                    </div>
					
					<?php endwhile;?>
                    
                </div><!--end carousel-->
            </div>
        </div>
    </section>
<!--End PortFolio Area-->