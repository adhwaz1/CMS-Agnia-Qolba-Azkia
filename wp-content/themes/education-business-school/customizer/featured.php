<?php

add_action( 'init', 'education_business_school_featured_posts' );
function education_business_school_featured_posts(){

	Kirki::add_section( 'education_business_school_featured_posts_section', array(
        'title'     => esc_html__( 'Featured Posts', 'education-business-school' ),
        'section'   => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'featured_post_status',
		'label'       => esc_html__( 'Enable / Disable', 'education-business-school' ),
		'section'     => 'education_business_school_featured_posts_section',
		'default'     => false,
	] );

	Kirki::add_field( 'bizberg', [
		'type'        => 'repeater',
		'label'       => esc_html__( 'Choose Categories', 'education-business-school' ),
		'section'     => 'education_business_school_featured_posts_section',
		'row_label' => [
			'type'  => 'text',
			'value' => esc_html__( 'Category', 'education-business-school' ),
		],
		'button_label' => esc_html__('Add New', 'education-business-school' ),
		'settings'     => 'featured_post_categories',
		'default' => [],
		'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true,
            ),
        ),
        'choices' => [
			'limit' => 3
		],
		'fields' => [
			'cat_id' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Category', 'education-business-school' ),
				'choices'     => bizberg_get_post_categories(),
				'default'     => '',
			],
			'image_id'  => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'education-business-school' ),
				'default'     => '',
			],
		]
	] );

	Kirki::add_field( 'bizberg', [
        'type'        => 'typography',
        'settings'    => 'featured_post_title_font_family',
        'label'       => esc_html__( 'Category Font', 'education-business-school' ),
        'section'     => 'education_business_school_featured_posts_section',
        'default'     => [
            'font-family'    => 'Montserrat',
            'variant'        => 'regular',
            'font-size'      => '14px',
            'line-height'    => '1',
            'letter-spacing' => '0',
            'text-transform' => 'none',
            'color'          => '#878787'
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.imagepost-item h5',
            ],
        ],
        'active_callback'    => array(
            array(
                'setting'  => 'featured_post_status',
                'operator' => '==',
                'value'    => true
            )
        )
    ] );

}