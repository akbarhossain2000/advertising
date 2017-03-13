<!-- Section VIDEO -->
<style type="text/css">
#video{margin-bottom:50px;}
</style>
	<section id="video">
		<div class="container">
			<div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <a href="<?php echo esc_url( get_permalink(244) );?>"><h2>VIDEO</h2></a>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="row">
						<?php
							$video_item = array(
								'post_type'		=> 'post',
								'category_name'	=> 'Video',
								'posts_per_page'=> 2
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
		</div>
	</section>
<!-- Section End VIDEO -->