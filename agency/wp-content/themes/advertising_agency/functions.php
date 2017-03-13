<?php

	function advertise_agency(){
		
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-background');
		add_image_size('slider_images', 535, 487, true);
		add_image_size('portfolio_images', 291, 250, true);
		
		
		load_theme_textdomain('adsagency', get_template_directory_uri().'/languages');
		
		if(function_exists('register_nav_menu')){
			register_nav_menu('main-menu', __('Main Menu', 'adsagency'));
		}
		
		wp_enqueue_script('jquery');
		
		
		register_post_type('slider', array(
				'labels'	=> array(
						'name'	=> 'Sliders',
						'add_new_item'	=> 'Add New Slider'
				),
				'public'	=> true,
				'supports'	=> array('title', 'editor', 'thumbnail', 'custom-fields')
		));
		
		register_post_type('portfolio', array(
				'labels'		=> array(
						'name'			=> 'Portfolio',
						'add_new_item' 	=> 'Add New Portfolio Item'
				),
				'public'		=> true,
				'supports'		=> array('title', 'editor', 'thumbnail')
		));
		
		register_post_type('services', array(
				'labels'		=> array(
						'name'			=> 'Services',
						'add_new_item' 	=> 'Add New Services'
				),
				'public'		=> true,
				'supports'		=> array('title', 'editor', 'thumbnail', 'custom-fields')
		));
		
		register_post_type('gallery', array(
				'labels'		=> array(
						'name'			=> 'Gallery',
						'add_new_item' 	=> 'Add New Gallery Item'
				),
				'public'		=> true,
				'supports'		=> array('title', 'editor', 'thumbnail')
		));
		
	}
	
	
	add_action('after_setup_theme', 'advertise_agency');
	
	
	function advertise_fallback_menus(){
		echo '<ul class="nav navbar-nav navbar-right">';
		if('page' != get_option('show_on_front')){
			echo'<li><a href="'.site_url().'/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo'</ul>';
	}
	
	
	
	require_once("lib/ReduxCore/framework.php");
	require_once("lib/sample/config.php");
	
	
	function adsagency_widget_sidebar(){
		register_sidebar(array(
			'name'			=> __('Footer Widgets', 'adsagency'),
			'description'	=> __('Footer widget add here', 'adsagency'),
			'id'			=> 'footer_widget',
			'before_widget' => '<div class="col-md-3 col-sm-6"><div class="widget">',
			'after_widget'	=> '</div></div>',
			'before_title'	=> '<h4>',
			'after_title'	=> '</h4>'
		));
	}
	
	add_action('widgets_init', 'adsagency_widget_sidebar');
	
	




?>