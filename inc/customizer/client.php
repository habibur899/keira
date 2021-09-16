<?php

Kirki::add_section( 'keira_client_section', array(
	'title'       => esc_html__( 'Client', 'keira' ),
	'description' => esc_html__( 'Keira client area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'         => 'repeater',
	'label'        => esc_html__( 'Add Your Client', 'keira' ),
	'section'      => 'keira_client_section',
	'priority'     => 10,
	'row_label'    => [
		'type'  => 'text',
		'value' => esc_html__( 'Client', 'keira' ),
	],
	'button_label' => esc_html__( 'Add A New Client', 'keira' ),
	'settings'     => 'keira_client_repeater',
	'fields'       => [
		'keira_client_logo'    => [
			'type'        => 'image',
			'label'       => esc_html__( 'Client Logo', 'keira' ),
			'description' => esc_html__( 'Add client logo', 'keira' ),
		]
	]
] );