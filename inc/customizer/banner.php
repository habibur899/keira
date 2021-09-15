<?php
Kirki::add_section( 'keira_banner_section', array(
	'title'       => esc_html__( 'Banner Area', 'keira' ),
	'description' => esc_html__( 'Keira banner area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_banner_name',
	'label'    => esc_html__( 'Name', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => esc_html__( 'Hi I\'m Keira Jones', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_banner_position',
	'label'    => esc_html__( 'Position', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => esc_html__( 'Designer & Artist', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_banner_description',
	'label'    => esc_html__( 'Description', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => esc_html__( 'Creating Something Great For Web', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_banner_left_button_text',
	'label'    => esc_html__( 'Left Button Text', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => esc_html__( 'My Portfolio', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'link',
	'settings' => 'keira_banner_left_button_link',
	'label'    => __( 'Left Button Link', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => '#portfolio',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_banner_right_button_text',
	'label'    => esc_html__( 'Right Button Text', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => esc_html__( 'Contact Me', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'link',
	'settings' => 'keira_banner_right_button_link',
	'label'    => __( 'Right Button Link', 'keira' ),
	'section'  => 'keira_banner_section',
	'default'  => '#contact',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'        => 'background',
	'settings'    => 'banner_background_image',
	'label'       => esc_html__( 'Banner Background Image', 'keira' ),
	'description' => esc_html__( 'Set Banner Background Image', 'keira' ),
	'section'     => 'keira_banner_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => get_template_directory_uri().'/assets/images/home/banner1.jpg',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.banner-area',
		],
	],
] );

