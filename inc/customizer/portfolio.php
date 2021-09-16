<?php

Kirki::add_section( 'keira_portfolio_section', array(
	'title'       => esc_html__( 'Portfolio', 'keira' ),
	'description' => esc_html__( 'Keira portfolio area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_portfolio_heading_color',
	'label'    => esc_html__( 'Color Heading', 'keira' ),
	'section'  => 'keira_portfolio_section',
	'default'  => esc_html__( 'My', 'keira' ),
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_portfolio_heading_white',
	'label'    => esc_html__( 'White Heading', 'keira' ),
	'section'  => 'keira_portfolio_section',
	'default'  => esc_html__( 'Portfolio', 'keira' ),
	'priority' => 10,
] );
