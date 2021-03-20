<?php
wp_enqueue_script( 'cz-plyr-js', 'https://cdn.plyr.io/3.6.4/plyr.js');
wp_enqueue_style( 'cz-plyr-css', 'https://cdn.plyr.io/3.6.4/plyr.css');

acf_register_block_type([
	'name'              => 'cz-plyr',
	'title'             => 'Plyr',
	'description'       => 'A video block embed that supports YouTube and Vimeo using plyr.',
	'render_callback'   => cz_render_acf_block('cz-plyr', __dir__ . '/block.php'),
	'enqueue_style'     => CZ_BLOCKS_URI . 'blocks/plyr/style.css',
	'enqueue_script'    => CZ_BLOCKS_URI . 'blocks/plyr/script.js',
	'category'          => 'layout',
	'icon'              => 'format-video',
	'keywords'          => array( 'video', 'youtube', 'vimeo', 'plyr' ),
	'supports'          => array(
		'align' => true,
	)
]);
