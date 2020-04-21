<?php

$GLOBALS['ROSEWOOD'] = array();

function load_stylesheets()
{
	wp_register_style('style', get_template_directory_uri() . '/files/rw_hotels_and_resorts/css/style.desktop.min.css', array(), 1, 'all');
	wp_enqueue_style('style');

	wp_register_style('all', get_template_directory_uri() . '/files/rosewood_hotels_and_resorts/group/css/all.css', array(), 1, 'all');
	wp_enqueue_style('all');
    
    wp_register_style('font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_scripts()
{
	wp_register_script('widget', 'https://www.speedrfp.com/irfps/js/widget/', array(), 1, 1, 1);
	wp_enqueue_script('widget');

	wp_register_script('fontawesome', 'https://kit.fontawesome.com/a076d05399.js', array(), 1, 1, 1);
	wp_enqueue_script('fontawesome');

	wp_enqueue_script('jquery');

	wp_register_script('VisitorIdentification', get_template_directory_uri() . '/layouts/system/VisitorIdentification.js', array(), 1, 1, 1);
    wp_enqueue_script('VisitorIdentification');
    
    wp_register_script('scripts', get_template_directory_uri() . '/files/rw_hotels_and_resorts/js/scripts.desktop.min.js?201910', array(), 1, 1, 1);
    wp_enqueue_script('scripts');

	wp_register_script('non-core-scripts', get_template_directory_uri() . '/files/rw_hotels_and_resorts/js/scripts.non-core.desktop.min.js', array(), 1, 1, 1);
    wp_enqueue_script('non-core-scripts');

    wp_register_script('respond', get_template_directory_uri() . '/files/rosewood_hotels_and_resorts/js/respond.min.js', array(), 1, 1, 1);
    wp_enqueue_script('respond');

    /*wp_register_script('plugins-min', get_template_directory_uri() . '/files/rosewood_hotels_and_resorts/js/plugins.min.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins-min');

    wp_register_script('all-min', get_template_directory_uri() . '/files/rosewood_hotels_and_resorts/group/js/all.min.js', array(), 1, 1, 1);
    wp_enqueue_script('all-min');*/


}
add_action('wp_enqueue_scripts', 'load_scripts');


//Navigation Menu
add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => "Mobile Menu Location"
	)
);

//Add attribure for navigation menu ul li a
add_filter( 'nav_menu_link_attributes', 'wpse_100726_extra_atts', 10, 3 );
function wpse_100726_extra_atts( $atts, $item, $args )
{
    $atts['class'] = 'gtm-nav';
    $atts['data-dropdown'] = 'true';
    return $atts;
}
