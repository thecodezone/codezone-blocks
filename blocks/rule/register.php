<?php
wp_enqueue_style( 'cz-rule', CZ_BLOCKS_URI . 'blocks/rule/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);

acf_register_block_type([
	'name'              => 'cz-rule',
	'title'             => 'Rule',
	'description'       => 'A fancy horizontal rule.',
	'render_callback'   => cz_render_acf_block('cz-hero', __dir__ . '/block.php'),
	'category'          => 'layout',
	'icon'              => 'editor-insertmore',
	'keywords'          => array( 'rule', 'line', 'bar'),
	'supports'          => array(
		'align' => false,
	),
	'mode'              => 'preview'
]);
