<?php

Kirki::add_section( 'keira_contact_section', array(
	'title'       => esc_html__( 'Contact', 'keira' ),
	'description' => esc_html__( 'Keira contact area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_contact_section',
	'default'  => esc_html__( 'Contact', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_contact_section',
	'default'  => esc_html__( 'Me', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_faq_heading',
	'label'    => esc_html__( 'FAQ Heading', 'keira' ),
	'section'  => 'keira_contact_section',
	'default'  => esc_html__( 'Frequently Asked Questions', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'         => 'repeater',
	'label'        => esc_html__( 'Add Your FAQ', 'keira' ),
	'section'      => 'keira_contact_section',
	'priority'     => 10,
	'row_label'    => [
		'type'  => 'text',
		'value' => esc_html__( 'FAQ', 'keira' ),
	],
	'button_label' => esc_html__( 'Add A New FAQ', 'keira' ),
	'settings'     => 'keira_faq_repeater',
	'fields'       => [
		'keira_contact_title'     => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title', 'keira' ),
			'description' => esc_html__( 'Add faq title', 'keira' ),
		],
		'keira_contact_description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'keira' ),
			'description' => esc_html__( 'Add faq description', 'keira' ),
		],

	]
] );