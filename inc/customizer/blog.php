<?php

Kirki::add_section( 'keira_blog_section', array(
	'title'       => esc_html__( 'Blog', 'keira' ),
	'description' => esc_html__( 'Keira blog area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_blog_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_blog_section',
	'default'  => esc_html__( 'Our', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_blog_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_blog_section',
	'default'  => esc_html__( 'Blog', 'keira' ),
	'priority' => 10,
] );
