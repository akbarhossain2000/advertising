<?php

/*
	Template Name: Portfolio
*/

get_header();
?>

<!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Portfolio</h1>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->
	
<!--Gallery-->
    <section id="advertisement" class="p_margin">
	
        <div class="container">
            <div class="row">
                <div class="col-md-12 content content1">
                    <div class="row">
						<?php 
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$port_item = array(
								'post_type' 	=> 'portfolio',
								'posts_per_page'=> 16,
								'paged'			=> $paged
						);
						
						$portimg	=	new WP_Query($port_item);
						?>
						
						<?php 
							while($portimg->have_posts()): $portimg->the_post();
							
							$portimg_id		= get_post_thumbnail_id();
							$portimg_url	= wp_get_attachment_image_src($portimg_id, 'portfolio_images', true);	
							$port_full_img_url	= wp_get_attachment_image_src($portimg_id, '', true);	
						?>
							<div class="col-md-3 col-sm-6 adp">
								<div class="ads">
									<a href="#"><img src="<?php echo $portimg_url[0];?>" alt="portfolio image" /></a>
									<div class="ads-title"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
									<a class="example-image-link ads-hover" href="<?php echo $port_full_img_url[0]; ?>" data-lightbox="example-set">
										<span>Click to view full image</span>
										
									</a>
								</div>
							</div>
							
						<?php endwhile; ?>
						
                    </div>
                </div>				
            </div>
			
			
			
            <div class="row">
                <div class="pagi">
						<?php
							require_once("pagination.php");
							ct_paging_nav('portimg');
						?>

                </div>
				
				
				
            </div>
        </div>
    </section><!--end gallery-->


<?php get_footer(); ?>