<?php

Kirki::add_section( 'keira_testimonial_section', array(
	'title'       => esc_html__( 'Testimonial', 'keira' ),
	'description' => esc_html__( 'Keira testimonial area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_testimonial_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_testimonial_section',
	'default'  => esc_html__( 'Clients', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_testimonial_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_testimonial_section',
	'default'  => esc_html__( 'Says', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'         => 'repeater',
	'label'        => esc_html__( 'Add Your Testimonial', 'keira' ),
	'section'      => 'keira_testimonial_section',
	'priority'     => 10,
	'row_label'    => [
		'type'  => 'text',
		'value' => esc_html__( 'Testimonial', 'keira' ),
	],
	'button_label' => esc_html__( 'Add A New Testimonial', 'keira' ),
	'settings'     => 'keira_testimonial_repeater',
	'fields'       => [
		'keira_testimonial_says'    => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Client Testimonial', 'keira' ),
			'description' => esc_html__( 'Add testimonial image', 'keira' ),
		],
		'keira_testimonial_name'     => [
			'type'        => 'text',
			'label'       => esc_html__( 'Name', 'keira' ),
			'description' => esc_html__( 'Add testimonial member name', 'keira' ),
		],
		'keira_testimonial_position' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Position', 'keira' ),
			'description' => esc_html__( 'Add testimonial member position', 'keira' ),
		]
	]
] );