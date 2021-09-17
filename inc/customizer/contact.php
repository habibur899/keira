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
	'type'     => 'editor',
	'settings' => 'keira_contact_shortcode',
	'label'    => esc_html__( 'Contact Form Shortcode', 'keira' ),
	'description' => esc_html__( 'Keira contact form shortcode', 'keira' ),
	'section'  => 'keira_contact_section',
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
	'type'     => 'text',
	'settings' => 'keira_contact_faq_one',
	'label'    => esc_html__( 'FAQ Heading One', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'textarea',
	'settings' => 'keira_contact_faq_one_desc',
	'label'    => esc_html__( 'FAQ Description One', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_faq_two',
	'label'    => esc_html__( 'FAQ Heading Two', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'textarea',
	'settings' => 'keira_contact_faq_two_desc',
	'label'    => esc_html__( 'FAQ Description Two', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_faq_three',
	'label'    => esc_html__( 'FAQ Heading Three', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'textarea',
	'settings' => 'keira_contact_faq_three_desc',
	'label'    => esc_html__( 'FAQ Description Three', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );


Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_contact_faq_four',
	'label'    => esc_html__( 'FAQ Heading Four', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );

Kirki::add_field( 'keira_config', [
	'type'     => 'textarea',
	'settings' => 'keira_contact_faq_four_desc',
	'label'    => esc_html__( 'FAQ Description Four', 'keira' ),
	'section'  => 'keira_contact_section',
	'priority' => 10,
] );
