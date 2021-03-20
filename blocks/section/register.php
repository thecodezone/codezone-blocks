<?php

acf_register_block_type([
	'name'              => 'cz_section',
	'title'             => 'Section',
	'description'       => 'A page section. The basic building block of a page.',
	'render_callback'   => cz_render_acf_block('cz-section', __dir__ . '/block.php'),
	'enqueue_style'     => CZ_BLOCKS_URI . 'blocks/section/style.css',
	'category'          => 'layout',
	'icon'              => 'align-wide',
	'keywords'          => array( 'section', 'box' ),
	'supports'          => array(
		'align' => true,
		'mode' => false,
		'jsx' => true
	),
	'mode'              => 'preview'
]);
