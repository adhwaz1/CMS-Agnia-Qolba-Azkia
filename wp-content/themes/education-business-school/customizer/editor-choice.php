<?php

add_action( 'init', 'education_business_school_editorial_post_settings' );
function education_business_school_editorial_post_settings(){

	Kirki::add_section( 'education_business_school_editor_post_section', array(
        'title'     => esc_html__( 'Editor Choice', 'education-business-school' ),
        'section'   => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'editor_post_status',
		'label'       => esc_html__( 'Enable / Disable', 'education-business-school' ),
		'section'     => 'education_business_school_editor_post_section',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', array(
        'type'        => 'select',
        'settings'    => 'editor_post_category',
        'label'       => esc_html__( 'Select Post Category', 'education-business-school' ),
        'section'     => 'education_business_school_editor_post_section',
        'multiple'    => 1,
        'choices'     => bizberg_get_post_categories(),
        'active_callback'    => array(
            array(
                'setting'  => 'editor_post_status',
                'operator' => '==',
                'value'    => true
            ),
        ),
    ) );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'editor_post_category_font_family',
        'label'       => esc_html__( 'Category Font', 'education-business-school' ),
        'section'     => 'education_business_school_editor_post_section',
        'default'     => [
            'font-family'    => 'Poppins',
            'variant'        => '500',
            'font-size'      => '13px',
            'line-height'    => '1',
            'letter-spacing' => '0px',
            'text-transform' => 'uppercase',
            'color'          => '#878787'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post-content a.featured-category',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'editor_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

    Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'editor_post_title_font_family',
        'label'       => esc_html__( 'Title Font', 'education-business-school' ),
        'section'     => 'education_business_school_editor_post_section',
        'default'     => [
            'font-family'    => 'Lato',
            'variant'        => '700',
            'font-size'      => '19px',
            'line-height'    => '1',
            'letter-spacing' => '0px',
            'text-transform' => 'none',
            'color'          => '#64686d'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.featured-post-content h4',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'editor_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

}