<?php

/*
	Template Name: Video Page
*/

get_header();
?>
<section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Video Gallery</h1>
                </div>
            </div>
        </div>
</section><!--end main page heading-->

<!-- Section VIDEO -->
<style type="text/css">
#video{margin:30px 0px;}
</style>
	<section id="video">
		<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="row">
						<?php
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$video_item = array(
								'post_type'		=> 'post',
								'category_name'	=> 'Video',
								'posts_per_page'=> 6,
								'paged'			=> $paged
							);
							
							$video_query = new WP_Query($video_item);
							
							
							
							while($video_query->have_posts()): $video_query->the_post();
						?>
						
						<div class="col-sm-6">
							<div class="advertise">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php the_title(); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						
						<?php 
							endwhile;
						?>
					</div>
				</div>
				
				<div class="col-sm-1"></div>
            </div>
			<div class="row">
                <div class="pagi">
                    <?php
						require_once("pagination.php");
						
						ct_paging_nav('video_query');
					?>
                </div>
            </div>
		</div>
	</section>
<!-- Section End VIDEO -->



<?php get_footer(); ?>