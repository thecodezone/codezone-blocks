<?php
wp_enqueue_style( 'cz-hero', CZ_BLOCKS_URI . 'blocks/hero/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);

acf_register_block_type([
	'name'              => 'cz-hero',
	'title'             => 'Hero',
	'description'       => 'The hero of the page. Great for large video or image sections.',
	'render_callback'   => cz_render_acf_block('cz-hero', __dir__ . '/block.php'),
	'category'          => 'layout',
	'icon'              => 'format-image',
	'keywords'          => array( 'hero', 'image', 'video', 'cover' ),
	'supports'          => array(
		'align' => true,
		'mode' => false,
		'jsx' => true
	),
	'mode'              => 'preview'
]);

