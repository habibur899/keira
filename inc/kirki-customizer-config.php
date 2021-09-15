<?php

Kirki::add_config( 'keira_config', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );

Kirki::add_panel( 'keira_panel_id', array(
	'priority'    => 130,
	'title'       => esc_html__( 'Theme Options', 'keira' ),
	'description' => esc_html__( 'Keira theme options is here', 'keira' ),
) );

require_once 'customizer/banner.php';
require_once 'customizer/about-me.php';
require_once 'customizer/services.php';
require_once 'customizer/statistic.php';