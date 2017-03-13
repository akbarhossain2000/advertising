<?php get_header(); ?>


<?php 
	
	$service_item = array(
			'post_type'		=> 'services'
	);
	
	if(have_posts()): the_post();
	
		$service_id	= get_post_thumbnail_id();
		$service_url 	= wp_get_attachment_image_src($service_id, '', true);
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
					<img src="<?php echo $service_url[0]; ?>" alt="" />
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


<?php get_footer(); ?>