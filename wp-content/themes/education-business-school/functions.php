<?php

add_action( 'after_setup_theme', 'education_business_school_setup_theme' );
function education_business_school_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'wp_enqueue_scripts', 'education_business_school_chld_thm_parent_css' );
function education_business_school_chld_thm_parent_css() {

    $education_business_school_theme = wp_get_theme();
    $theme_version = $education_business_school_theme->get( 'Version' );

    wp_enqueue_style( 
    	'education_business_school_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	),
        $theme_version
    );

    if ( is_rtl() ) {
        wp_enqueue_style( 
            'education_business_school_parent_rtl', 
            trailingslashit( get_template_directory_uri() ) . 'rtl.css'
        );
    }
    
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'education_business_school_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'education_business_school_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'education_business_school_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'education_business_school_change_theme_color' );
function education_business_school_change_theme_color(){
    return '#ffb606';
}

/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'education_business_school_header_menu_color_hover' );
function education_business_school_header_menu_color_hover(){
    return '#ffb606';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'education_business_school_header_button_color' );
function education_business_school_header_button_color(){
    return '#ffb606';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'education_business_school_header_button_color_hover' );
function education_business_school_header_button_color_hover(){
    return '#ffb606';
}

/**
* Changed to slider
*/
add_filter( 'bizberg_slider_banner_settings', 'education_business_school_slider_banner_settings' );
function education_business_school_slider_banner_settings(){
    return 'slider';
}

add_filter( 'bizberg_slider_title_box_highlight_color', 'education_business_school_slider_title_box_highlight_color' );
function education_business_school_slider_title_box_highlight_color(){
    return '#ffb606';
}

add_filter( 'bizberg_slider_arrow_background_color', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_slider_dot_active_color', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_read_more_background_color', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_read_more_background_color_2', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_link_color_hover', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_blog_listing_pagination_active_hover_color', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_sidebar_widget_link_color_hover', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_sidebar_widget_title_color', 'education_business_school_slider_arrow_background_color' );
add_filter( 'bizberg_footer_social_icon_background', 'education_business_school_slider_arrow_background_color' );
function education_business_school_slider_arrow_background_color(){
    return '#ffb606';
}

add_filter( 'bizberg_slider_gradient_primary_color', 'education_business_school_slider_gradient_primary_color' );
function education_business_school_slider_gradient_primary_color(){
    return 'rgba(255,182,6,0.65)';
}

add_filter( 'bizberg_link_color', 'education_business_school_link_color' );
function education_business_school_link_color(){
    return '#64686d';
}

add_filter( 'bizberg_footer_social_icon_color', 'education_business_school_footer_social_icon_color' );
function education_business_school_footer_social_icon_color(){
    return '#fff';
}

add_filter( 'bizberg_sticky_content_sidebar' , 'education_business_school_sticky_content_sidebar' );
function education_business_school_sticky_content_sidebar(){
    return false;
}

add_filter( 'bizberg_getting_started_screenshot', function(){
    return true;
});