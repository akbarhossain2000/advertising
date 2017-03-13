<?php

/*
	Template Name: Our Services
*/

get_header();
?>
<section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Services</h1>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->
	
<!--SERVICES-->
    <section id="categories" class="p_margin">
        <div class="container">
            <div class="row">
				<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$service_item = array(
							'post_type'		=> 'services',
							'posts_per_page'=> 9,
							'paged'			=> $paged
					);
					
					$serviceimg = new WP_Query($service_item);
					
					while($serviceimg->have_posts()): $serviceimg->the_post();
					
						$service_id		= get_post_thumbnail_id();
						$service_url 	= wp_get_attachment_image_src($service_id, 'portfolio_images', true);
						$service_full_img_url 	= wp_get_attachment_image_src($service_id, '', true);
				
				?>
							<div class="col-sm-4">
								<div class="category">
									<div class="category-icon">
										<i class="fa fa-briefcase fa-2x"></i>
									</div>
									<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
									<div class="row">
										<div class="col-sm-12">
											<a class="example-image-link ads-hover" href="<?php echo $service_full_img_url[0]; ?>" data-lightbox="example-set"><img src="<?php echo $service_url[0];?>" alt="service image" /></a>
										</div>
										<div class="col-sm-12">
											<p><?php echo wp_trim_words(get_the_content(), 30)."  "?></br><a href="<?php echo get_the_permalink(); ?>"><span><i class="fa fa-angle-double-right"></i></span> more details</a></p>
										</div>
									</div>
									
								</div>
							</div>
				
				<?php endwhile; ?>
				
            </div>
			
			<div class="row">
                <div class="pagi">
                    <?php
						
						require_once("pagination.php");
						
						ct_paging_nav('serviceimg');
						
					?>
                </div>
            </div>
            
        </div>
    </section><!--End SERVICES-->


<?php get_footer(); ?>