<?php

$GLOBALS['ROSEWOOD'] = array();

function load_stylesheets()
{
	wp_register_style('style', get_template_directory_uri() . '/files/rw_hotels_and_resorts/css/style.desktop.min.css', array(), 1, 'all');
	wp_enqueue_style('style');

	wp_register_style('all', get_template_directory_uri() . '/files/rosewood_hotels_and_resorts/group/css/all.css', array(), 1, 'all');
	wp_enqueue_style('all');

    wp_register_style('_r_t3e', get_template_directory_uri() . '/files/rw_hotels_and_resorts/css/maps/main/_r_t3e.less', array(), 1, 'all');
    wp_enqueue_style('_r_t3e');
    
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

/*function press_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Years',
            'singular_name' => 'Year'
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite'=> array( 'slug' => 'press' ),
    );
    register_taxonomy('years', array('presses'), $args);

}
add_action('init', 'press_taxonomy');*/

//Add Press CPT
function press_post_type()
{
	$args = array(
		'labels' => array(
			'name' => 'Presses',
			'singular_name' => 'Press'
		),
		//'taxonomies' => array( 'years' ),
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
		/*'rewrite' => array
            (
                'slug' => 'media/press',
                'with_front' => false

            ),*/

	);
	register_post_type('presses', $args);
}
add_action('init', 'press_post_type');

//Rewrite URL of post_type = presses
/*add_filter('post_type_link', 'year_term_permalink', 10, 4);
function year_term_permalink($post_link, $post, $leavename, $sample)
{
    if ( false !== strpos( $post_link, '%years%' ) ) {
        //$year_letter = get_the_terms( $post->ID, 'years' );
        $year = get_the_date( "Y", $post->ID );
        $post_link = str_replace( '%years%', $year, $post_link );
    }
    return $post_link;
}*/

//Get list of years when presses have been published
function get_presses_years_array() {
    global $wpdb;
    $result = array();
    $post_type = 'presses';
    $years = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT YEAR(post_date) FROM {$wpdb->posts} WHERE post_status = 'publish' AND wp_posts.post_type = '%s' GROUP BY YEAR(post_date) DESC", $post_type
        ),
        ARRAY_N
    );
    if ( is_array( $years ) && count( $years ) > 0 ) {
        foreach ( $years as $year ) {
            $result[] = $year[0];
        }
    }
    return $result;
}

