<?php function awesome_script_enqueue() {	
	wp_enqueue_style('customstyle',get_template_directory_uri() . '/Library/Foundation/css/foundation.css', array(),'1.0.0','all');
	wp_enqueue_style('customstyle',get_template_directory_uri() . '/Library/Foundation/css/normalize.css', array(),'1.0.0','all');
    wp_enqueue_style('customscript',get_template_directory_uri() . '/Library/Foundation/js/vendor/foundation.js', array(),'1.0.0','all');
    wp_enqueue_style('customscript',get_template_directory_uri() . '/Library/Foundation/js/vendor/jquery.js', array(),'1.0.0','all');
    wp_enqueue_style('customscript',get_template_directory_uri() . '/Library/Foundation/js/vendor/what-input.js', array(),'1.0.0','all');
    wp_enqueue_style('menu',get_template_directory_uri() . '/css/menu.css', array(),'1.0.0','all');
   
				}

	add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

	//Navigation Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		));