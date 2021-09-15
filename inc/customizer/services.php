<?php

Kirki::add_section( 'keira_services_section', array(
	'title'       => esc_html__( 'Services', 'keira' ),
	'description' => esc_html__( 'Keira services area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_services_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_services_section',
	'default'  => esc_html__( 'My', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_services_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_services_section',
	'default'  => esc_html__( 'Services', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Add Your Services', 'keira' ),
	'section'     => 'keira_services_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Service', 'keira' ),
	],
	'button_label' => esc_html__('Add A New Service', 'keira' ),
	'settings'     => 'keira_services_repeater',
	'fields' => [
		'keira_services_icons' => [
			'type'     => 'text',
			'label'       => esc_html__( 'Icon Link', 'keira' ),
			'description' => esc_html__( 'Add fontawesome icon', 'keira' ),
		],
		'keira_services_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Heading', 'keira' ),
			'description' => esc_html__( 'Add service heading', 'keira' ),
		],
		'keira_services_description'  => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'keira' ),
			'description' => esc_html__( 'Add services description', 'keira' ),
		],
	]
] );