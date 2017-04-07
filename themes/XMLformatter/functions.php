<?php function awesome_script_enqueue() {	
	wp_enqueue_style('customstyle',get_template_directory_uri() . '/Library/Foundation/css/foundation.css', array(),'1.0.0','all');
	wp_enqueue_style('customstl',get_template_directory_uri() . '/Library/Foundation/css/normalize.css', array(),'1.0.0','all');  	
			}

	add_action('wp_enqueue_scripts', 'awesome_script_enqueue');