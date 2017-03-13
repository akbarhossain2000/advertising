<?php

/*
	Template Name: About Us
*/

get_header();
?>

<!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>About US</h1>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->
    <!--Detail -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php
					
						if(have_posts()): 
							while(have_posts()): the_post();
					
					?>
                    <div class="page-content">
                        <h4 class="inner-heading">BEAUTIFUL TITLE GOES HERE</h4>
                        <!--<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet sitem dolore magna aliquam erat volutpat. Ut wisi enim ad <a href="#" class="col"> minim veniam </a>quis nostrud lobortis commodo. </p>
                        <blockquote>
                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                            facer possim assum.
                        </blockquote>

                        <P>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes traverunt quods lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus qui sequitur dolor sitel seaclar mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum onil claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</P>

                        <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.notare quam littera gothica formas humanitatis per seaclua dolor sit amet.</p>

                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nell nulla facilisis at vero eros et accumsan dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te small feugait nulla facilisi. </p>-->
						
						<?php
							the_content();
						?>
                    </div>

                    <?php 
						endwhile;
						endif;
					?>

                </div>
                
            </div>
        </div>
    </section><!--end details-->


<?php get_footer(); ?>