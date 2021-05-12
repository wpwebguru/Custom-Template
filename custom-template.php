<?php
/*
	*	Plugin Name: Custom Template
	*	Plugin URI: 	#
	*	Description: 	Custom Template
	*	Version:     	1.0
	*	Author: 		Sunny
	*	Author URI: 	https://facebook.com/ictsamidul/
*/

//Load template from specific page
add_filter( 'page_template', 'ct_page_template' );
function ct_page_template( $page_template ){

    if ( get_page_template_slug() == 'custom-page-template.php' ) {
        $page_template = dirname( __FILE__ ) . '/custom-page-template.php';
    }
    return $page_template;
}

/**
 * Add "Custom" template to page attirbute template section.
 */
add_filter( 'theme_page_templates', 'ct_add_template_to_select', 10, 4 );
function ct_add_template_to_select( $post_templates, $wp_theme, $post, $post_type ) {

    // Add custom template named template-custom.php to select dropdown 
    $post_templates['custom-page-template.php'] = __('Custom Template');

    return $post_templates;
}

add_action('init', 'custom_template_style_resources');

function custom_template_style_resources() {
	wp_register_style('bootstrap_min_css', plugins_url('css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('bootstrap_min_css');
	wp_register_style('custom_css', plugins_url('css/custom.css', __FILE__));
    wp_enqueue_style('custom_css');
}
