<?php
	function fb_styles_add(){
		wp_register_style( 'normalize', get_template_directory_uri().'/css/normalize.css',array(),'8.0');
		wp_register_style( 'style', get_template_directory_uri().'/style.css',array('normalize'),'1.0');


		wp_enqueue_style( 'normalize');
		wp_enqueue_style( 'style');
	}
	add_action('wp_enqueue_scripts','fb_styles_add');
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));	
	}
	//shorcode
	function jb_shortcode_de_contenido() {
		return 'Esto es el contenido';
	}
	add_shortcode('codigo', 'jb_shortcode_de_contenido'); 
	//para llamerlo se llama en hmtl como [codigo]
