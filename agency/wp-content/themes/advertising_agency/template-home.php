<?php  

/*
	Template name: home
*/

get_header(); 


?>
	
	
<!-- slider section -->
   <?php get_template_part('slider'); ?>

<!-- slider section end -->

<!-- portfolio section -->
   <?php get_template_part('portfolio_short'); ?>

<!-- portfolio section end -->

<!-- services section -->
   <?php get_template_part('services_short'); ?>

<!-- services section end -->

<!-- video section -->
   <?php get_template_part('video_short'); ?>

<!-- video section end -->

<!-- gallery section -->
   <?php get_template_part('gallery_short'); ?>

<!-- gallery section end -->



<?php  get_footer(); ?>