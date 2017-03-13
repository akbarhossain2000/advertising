<!--start Layer slider-->
    <section id="slider">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:500px;">
               
			
				
				<?php
					$args= array(
						'post_type'			=>	'slider',
						'posts_per_page'	=>	3
					);
					
					$sliderimg= new WP_Query($args);
				?>
				
				
				<?php while($sliderimg->have_posts()) : $sliderimg->the_post(); ?>
				
					<div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
						<img style="margin: 0 !important;" src="<?php echo  esc_url(get_template_directory_uri()); ?>/images/slider/bg2.png" class="ls-bg" alt="Slider background"/>
					<?php
						$slider_id = get_post_thumbnail_id();
						$slider_url= wp_get_attachment_image_src($slider_id, 'slider_images', true);
					?>
						<img class="ls-l" style="margin-top:0px !important;top:6px;left:75%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:30;delayin:1720;scalexin:0.9;scaleyin:0.9;offsetxout:0;offsetyout:300;durationout:1000;scalexout:0.5;scaleyout:0.5;transformoriginout:50% bottom 0;" src="<?php echo $slider_url[0]; ?>" alt="Slide">


						<h1 class="ls-l" style="font-family: 'Roboto Slab', serif; color: #3f3d59; top:100px; width:500px;font-weight: 700; left:116px; top:170px;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
							<?php the_title(); ?>
						</h1>
					
						<h2 class="ls-l" style="font-family:'Raleway', sans-serif;top:280px;left:116px;font-weight: 300;height:40px;padding:5px 22px;font-size:32px;line-height:37px;color:#ffffff;background:#a0ce4e;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
							<?php echo get_the_content(); ?>
						</h2>
						
					
					
						<img class="ls-l ls-linkto-2" style="top:460px;left:610px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="<?php echo get_template_directory_uri(); ?>/images/slider/left.png" alt="left arrow">
						
						<img class="ls-l ls-linkto-2" style="top:460px;left:650px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="<?php echo  get_template_directory_uri(); ?>/images/slider/right.png" alt="right arrow">
					
					</div>
				
				<?php endwhile; ?>
				
				
				
            </div>
        </div>
    </section><!--end layer slider section-->