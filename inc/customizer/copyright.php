<?php

Kirki::add_section( 'keira_copyright_section', array(
	'title'       => esc_html__( 'Copyright', 'keira' ),
	'description' => esc_html__( 'Keira copyright area', 'keira' ),
	'panel'       => 'keira_panel_id',
	'priority'    => 160,
) );

Kirki::add_field( 'keira_config', [
	'type'     => 'text',
	'settings' => 'keira_copyright_text',
	'label'    => esc_html__( 'Copyright Text', 'keira' ),
	'section'  => 'keira_copyright_section',
	'default'  => esc_html__( '© 2021 Keira. All Rights Reserved', 'keira' ),
	'priority' => 10,
] );
