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
	
	function codex_portfolio_init(){
		$plabels =array(
			'name' => 'Portfolio',
			'singular_name' => 'Portfolio',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Portfolio Item',
			'all_items'	=> 'All Portfolio Items',
			'parent_item_colon' => '',
			'menu_name'	=> 'Portfolio'
		);
		
		$pargs = array(
			'labels' => $plabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_bar' => true,
			'rewrite' => array( 'slug' => 'portfolio' ),
			'capability_type' => 'post',
			'has_archive'	=> true,
			'hierarchical'	=> false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'author', 'thumbnail')
		);
		register_post_type( 'portfolio', $pargs);
	}
	add_action('init', 'codex_portfolio_init');
	
	function codex_services_init(){
		$slabels =array(
			'name' => 'Services',
			'singular_name' => 'Services',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Services Item',
			'all_items'	=> 'All Services Items',
			'parent_item_colon' => '',
			'menu_name'	=> 'Services'
		);
		
		$sargs = array(
			'labels' => $slabels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_bar' => true,
			'rewrite' => array( 'slug' => 'services' ),
			'capability_type' => 'post',
			'has_archive'	=> true,
			'hierarchical'	=> false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'author', 'thumbnail')
		);
		register_post_type( 'services', $sargs);
	}
	add_action('init', 'codex_services_init');
	
	
	function codex_gallery_init(){
		$labels =array(
			'name' => 'Gallery',
			'singular_name' => 'Gallery',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Gallery Item',
			'all_items'	=> 'All Gallery Items',
			'parent_item_colon' => '',
			'menu_name'	=> 'Gallery'
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_bar' => true,
			'rewrite' => array( 'slug' => 'gallery' ),
			'capability_type' => 'post',
			'has_archive'	=> true,
			'hierarchical'	=> false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'author', 'thumbnail')
		);
		register_post_type( 'gallery', $args);
	}
	add_action( 'init', 'codex_gallery_init' );
	
	
	
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