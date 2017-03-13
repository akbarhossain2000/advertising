<?php

/*
	Template Name: Photo Gallery
*/

get_header();
?>

<!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Gallery</h1>
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
							$gallery_item = array(
								'post_type' => 'gallery',
								'posts_per_page' => 2,
								'pagination' => true,
								'paged' => $paged 
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
									<a class="example-image-link ads-hover" href="<?php echo $g_full_img_url[0]; ?>" data-lightbox="example-set">
										<span>Click to view full image</span>
										<i class="fa fa-heart fa-2x"></i>
									</a>
								</div>
							</div>
							
						<?php endwhile; ?>
						<?php include_once("pagination.php"); ?>
                    </div>
                </div>
                
            </div>
			
            <div class="row">
                <div class="pagi">
					<ul>
						<?php
							ct_paging_nav('galeryimg');
							//the_posts_pagination(array());
						?>
					</ul>
						
                </div>
            </div>
        </div>
    </section><!--end gallery-->
	
	
	<?php
	
	get_footer();
	
	?>
