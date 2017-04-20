<?php 
// add package setings

// var_dump(dirname(__FILE__)  . '/functions/package.php');exit;
require_once dirname(__FILE__)  . '/functions/package.php';

function awesome_script_enqueue() {	
	wp_enqueue_style('customstyle',get_template_directory_uri() . '/Library/Foundation/css/foundation.min.css', array(),'1.0.0','all');
	wp_enqueue_style('customstyle1',get_template_directory_uri() . '/Library/Foundation/css/normalize.css', array(),'1.0.0','all');

    wp_enqueue_style('menu',get_template_directory_uri() . '/css/menu.css', array(),'1.0.0','all');
    wp_enqueue_style('stick',get_template_directory_uri() . '/js/stickyy.js', array(),'1.0.0','all');
    wp_enqueue_style('packages',get_template_directory_uri() . '/css/packages.css', array(),'1.0.0','all');
    wp_enqueue_style('footer',get_template_directory_uri() . '/css/footer.css', array(),'1.0.0','all');
    wp_enqueue_style('metaslider',get_template_directory_uri() . '/css/metaslider.css', array(),'1.0.0','all');
    wp_enqueue_style('modal',get_template_directory_uri() . '/js/popup.js', array(),'1.0.0','all');
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function wpdocs_theme_name_scripts() {
    wp_enqueue_script('popup', get_template_directory_uri() . '/js/packagemodal.js', array(), '1.0.0', true );
    wp_enqueue_script('foundationjs',get_template_directory_uri() . '/Library/Foundation/js/vendor/foundation.js', array(),'1.0.0','all');
    wp_enqueue_script('jqueryjs',get_template_directory_uri() . '/Library/Foundation/js/vendor/jquery.js', array(),'1.0.0','all');
    wp_enqueue_script('what-imputjs',get_template_directory_uri() . '/Library/Foundation/js/vendor/what-input.js', array(),'1.0.0','all');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


//Navigation Menus
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
	));

add_theme_support( 'post-thumbnails' ); 