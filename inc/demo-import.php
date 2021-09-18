<?php
function ocdi_import_files() {
	return array(
		array(
			'import_file_name'             => 'Keira Demo Import',
			'categories'                   => array( 'Category 1', 'Category 2' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/demo-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/customizer.dat',
			'import_preview_image_url'     => 'https://www.codester.com/static/uploads/items/000/032/32988/preview-xl.jpg',
			'import_notice'                => __( 'After you import this demo, no need to setup blog page.', 'keira' ),
			'preview_url'                  => 'https://mourithemes.com/keira/',
		),
	);
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );