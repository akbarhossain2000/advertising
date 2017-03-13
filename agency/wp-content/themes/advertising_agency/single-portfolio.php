<?php get_header(); ?>


<?php 
	if(have_posts()):
	$portfolio_item = array(
			'post_type'		=> 'portfolio'
	);
	
	//$portimg = new WP_Query($portfolio_item);
	
	if(have_posts()): the_post();
	
		$portimg_id		= get_post_thumbnail_id();
		$portimg_url 	= wp_get_attachment_image_src($portimg_id, '', true);
?>



<section id="one-page-content">
	<div class="container">
		<div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
		<div class="row">
			<div class="col-sm-12">
				<div class="single-item">
					<img src="<?php echo $portimg_url[0]; ?>" alt="" />
					<p><?php echo get_the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; endif;?>



<?php get_footer(); ?>