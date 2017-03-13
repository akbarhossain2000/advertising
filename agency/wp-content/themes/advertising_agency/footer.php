<!--Footer-->
    <section id="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer_widget'); ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright text-center">
                            <p><?php global $adsagency; echo $adsagency['copyright']; ?><a class="col" href="http://deelko.com" target='_blank'><?php echo $adsagency['author_name']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </footer>
    </section>
    <!--End Footer-->
    
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/bootstrap.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/owl.carousel.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/default.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/lightbox-plus-jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/js/plightbox-plus-jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/layerslider/js/greensock.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri());?>/layerslider/js/layerslider.transitions.js"></script>


<?php wp_footer();?>
</body>

<!-- Mirrored from joinwebs.co.uk/products/classify-html-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2016 19:42:48 GMT -->
</html>