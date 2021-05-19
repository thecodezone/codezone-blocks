<?php
wp_enqueue_style( 'cz-rule', CZ_BLOCKS_URI . 'blocks/rule/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);

acf_register_block_type([
	'name'              => 'cz-rule',
	'title'             => 'Rule',
	'description'       => 'A fancy horizontal rule.',
	'render_callback'   => cz_render_acf_block('cz-hero', __dir__ . '/block.php'),
	'category'          => 'cz',
    'icon'              => '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="horizontal-rule" class="svg-inline--fa fa-horizontal-rule fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M640 240.13v31.74A16 16 0 0 1 624.13 288H15.87A16 16 0 0 1 0 271.87v-31.74A16 16 0 0 1 15.87 224h608.26A16 16 0 0 1 640 240.13z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d=""></path></g></svg>',
	'keywords'          => array( 'rule', 'line', 'bar'),
	'supports'          => array(
		'align' => false,
	),
	'mode'              => 'preview'
]);
