<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<!-- Mirrored from joinwebs.co.uk/products/classify-html-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2016 19:40:32 GMT -->
<head>
    <meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Deelko">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700,600,800,900,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri());?>/images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/layerslider/css/layerslider.css">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />

	<?php wp_head();?>
</head>
<body <?php body_class();?>>

    <!--Start Header section-->
    <section id="header">
        <header>
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 responsive-width-top">
                            <div class="social">
                                <div class="social-icon">
									<?php
										global $adsagency;
										if($adsagency['social-icons']['1']): 
									?> 
                                    <a href="<?php echo $adsagency['social-icons']['1']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['2']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['2']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['3']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['3']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['4']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['4']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['5']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['5']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['6']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['6']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
									<?php endif; ?>
									
									<?php if($adsagency['social-icons']['7']): ?> 
                                    <a href="<?php echo $adsagency['social-icons']['7']; ?>" target="_blank"><i class="fa fa-dribbble"></i></a>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
						<div class="col-sm-6 responsive-width-top">
                            <div class="links text-right">
                                <h3 style="margin:0; padding:0; color:#FFFFFF; text-transform:uppercase;"><?php bloginfo('name'); ?></h3>
                            </div>
						</div>
                        <!--<div class="col-sm-6 responsive-width-top">
                            <div class="links text-right">
                                <a href="new-ad.html">Post an Ad</a>
                                <a href="register.html">Register</a>
                                <a href="login.html">Login</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div><!--end top bar-->

            <!--start menu-bar-->

            <div class="menu-bar">
                <div class="container">
                    <div class="row">
						<div class="col-sm-4">
							<div class="logo">
								<a href="<?php bloginfo('home'); ?>"><img src="<?php global $adsagency; echo $adsagency['logo']['url']; ?>" alt="Advertising Agencey"></a>
							</div>
						</div>
						
                        
                        <div class="col-sm-8">
                            <nav role="navigation" class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collection of nav links and other content for toggling -->
                                <div id="navbarCollapse" class="collapse navbar-collapse">
                                   
								<?php
									
										if(function_exists('wp_nav_menu')){
											wp_nav_menu(array(
												'theme_location' => 'main-menu',
												'menu_class' => 'nav navbar-nav navbar-right',
												'fallback_cb' => 'advertise_fallback_menus'
											));
										}
									
								?>

								   
                                </div>

                            </nav><!--end nav-->
                        </div>
                    </div>
                </div>
            </div><!--end menu-bar-->
        </header>
    </section><!--End Header section-->