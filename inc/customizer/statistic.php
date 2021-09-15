<?php

Kirki::add_section( 'keira_statistic_section', array(
	'title'       => esc_html__( 'Statistic', 'keira' ),
	'description' => esc_html__( 'Keira statistic area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_hour_number',
	'label'    => esc_html__( 'Hours Number', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( '5000', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_hour_title',
	'label'    => esc_html__( 'Hours Title', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( 'Hours of work', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_location_number',
	'label'    => esc_html__( 'Location Number', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( '50', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_location_title',
	'label'    => esc_html__( 'Location Title', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( 'Offices around the world', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_customer_number',
	'label'    => esc_html__( 'Customer Number', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( '3000', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_customer_title',
	'label'    => esc_html__( 'Customer Title', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( 'Happy Customer', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_awards_number',
	'label'    => esc_html__( 'Awards Number', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( '200', 'keira' ),
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_statistic_awards_title',
	'label'    => esc_html__( 'Awards Title', 'keira' ),
	'section'  => 'keira_statistic_section',
	'default'  => esc_html__( 'Business Awards Won', 'keira' ),
	'priority' => 10,
] );
