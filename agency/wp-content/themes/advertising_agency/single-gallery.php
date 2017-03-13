<?php get_header(); ?>


<?php 
	if(have_posts()):
	$gallery_item = array(
			'post_type'		=> 'gallery'
	);
	
	//$galeryimg = new WP_Query($gallery_item);
	
	if(have_posts()): the_post();
	
		$g_img_id		= get_post_thumbnail_id();
		$g_img_url		= wp_get_attachment_image_src($g_img_id, '', true);
?>



<section id="one-page-content">
	<div class="container">
		<div class="row">
                <div class="col-sm-12">
                    <div class="main-heading text-center">
                        <h2>
							<?php 
								if($post->ID)
								{
									the_title();
								} 
							?>
						</h2>
                    </div>
                </div>
            </div>
		<div class="row">
			<div class="col-sm-12">
				<div class="single-item">
					<img src="<?php if($post->ID){echo $g_img_url[0];} ?>" alt="" />
					<p><?php if($post->ID){echo get_the_content();} ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; endif;?>



<?php get_footer(); ?>