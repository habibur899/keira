<?php
Kirki::add_section( 'keira_about_me_section', array(
	'title'       => esc_html__( 'About Me', 'keira' ),
	'description' => esc_html__( 'Keira about me area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_about_me_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'ABOUT', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_about_me_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'ME', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'        => 'image',
	'settings'    => 'keira_about_me_image',
	'label'       => esc_html__( 'About Me Image', 'keira' ),
	'description' => esc_html__( 'about me image here', 'keira' ),
	'section'     => 'keira_about_me_section',
	'default'     => get_template_directory_uri().'assets/images/about/about.jpg',
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_about_me_top',
	'label'    => esc_html__( 'Top Heading', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'Why Me?', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_about_me_position',
	'label'    => esc_html__( 'Position', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'Professional Designer', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'textarea',
	'settings' => 'keira_about_me_description',
	'label'    => esc_html__( 'Description', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_about_me_button_text',
	'label'    => esc_html__( 'Button Text', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => esc_html__( 'Hire Me', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'link',
	'settings' => 'keira_about_me_button_link',
	'label'    => __( 'Button Link', 'keira' ),
	'section'  => 'keira_about_me_section',
	'default'  => 'https://www.upwork.com/',
	'priority' => 10,
] );