<?php

acf_register_block_type([
	'name'              => 'cz-rule',
	'title'             => 'Rule',
	'description'       => 'A fancy horizontal rule.',
	'render_callback'   => cz_render_acf_block('cz-hero', __dir__ . '/block.php'),
	'enqueue_style'     => CZ_BLOCKS_URI . 'blocks/rule/style.css',
	'category'          => 'layout',
	'icon'              => 'editor-insertmore',
	'keywords'          => array( 'rule', 'line', 'bar'),
	'supports'          => array(
		'align' => false,
	),
	'mode'              => 'preview'
]);
