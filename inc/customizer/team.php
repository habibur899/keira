<?php

Kirki::add_section( 'keira_team_section', array(
	'title'       => esc_html__( 'Team', 'keira' ),
	'description' => esc_html__( 'Keira team area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_team_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_team_section',
	'default'  => esc_html__( 'My', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_team_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_team_section',
	'default'  => esc_html__( 'Team', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'         => 'repeater',
	'label'        => esc_html__( 'Add Your Team', 'keira' ),
	'section'      => 'keira_team_section',
	'priority'     => 10,
	'row_label'    => [
		'type'  => 'text',
		'value' => esc_html__( 'Team', 'keira' ),
	],
	'button_label' => esc_html__( 'Add A New Member', 'keira' ),
	'settings'     => 'keira_team_repeater',
	'fields'       => [
		'keira_team_image'    => [
			'type'        => 'image',
			'label'       => esc_html__( 'Image', 'keira' ),
			'description' => esc_html__( 'Add team image', 'keira' ),
		],
		'keira_team_name'     => [
			'type'        => 'text',
			'label'       => esc_html__( 'Name', 'keira' ),
			'description' => esc_html__( 'Add team member name', 'keira' ),
		],
		'keira_team_position' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Position', 'keira' ),
			'description' => esc_html__( 'Add team member position', 'keira' ),
		],
		'keira_team_fb_url'   => [
			'type'        => 'url',
			'label'       => esc_html__( 'Facebook Link', 'keira' ),
			'description' => esc_html__( 'Add team member facebook link', 'keira' ),
			'default'     => 'https://facebook.com'
		],
		'keira_team_tw_url'   => [
			'type'        => 'url',
			'label'       => esc_html__( 'Twitter Link', 'keira' ),
			'description' => esc_html__( 'Add team member twitter link', 'keira' ),
			'default'     => 'https://twitter.com'
		],
		'keira_team_ldin_url'   => [
			'type'        => 'url',
			'label'       => esc_html__( 'Linkedin Link', 'keira' ),
			'description' => esc_html__( 'Add team member linkedin link', 'keira' ),
			'default'     => 'https://www.linkedin.com'
		],
		'keira_team_pin_url'   => [
			'type'        => 'url',
			'label'       => esc_html__( 'Pinterest Link', 'keira' ),
			'description' => esc_html__( 'Add team member pinterest link', 'keira' ),
			'default'     => 'https://pinterest.com'
		],
	]
] );