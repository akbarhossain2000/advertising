<!--Gallery-->
    <section id="advertisement">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
			<a href="#"><h2>GALLERY</h2></a>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12 content content1">
                    <div class="row">
						<?php  
							$gallery_item = array(
								'post_type' => 'gallery',
								'posts_per_page' => 4 
							);
							
							$galeryimg = new WP_Query($gallery_item);
							
							
							while($galeryimg->have_posts()): $galeryimg->the_post();
							
								$g_img_id 	= get_post_thumbnail_id();
								$g_img_url 	= wp_get_attachment_image_src($g_img_id, 'portfolio_images', true);
								$g_full_img_url 	= wp_get_attachment_image_src($g_img_id, '', true);


						?>
							<div class="col-md-3 col-sm-6 adp">
								<div class="ads">
									<a href="#"><img src="<?php echo $g_img_url[0];?>" alt="gallery image" /></a>
									<div class="ads-title"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
									<a class="ads-hover example-image-link" href="<?php echo $g_full_img_url[0]; ?>" data-lightbox="example-set">
										<span>Click to view full image</span>
										<i class="fa fa-heart fa-2x"></i>
									</a>
								</div>
							</div>
							
						<?php endwhile;?>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section><!--end gallery-->