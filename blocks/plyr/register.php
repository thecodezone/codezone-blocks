<?php
acf_register_block_type([
	'name'              => 'cz-plyr',
	'title'             => 'Plyr',
	'description'       => 'A video block embed that supports YouTube and Vimeo using plyr.',
	'render_callback'   => cz_render_acf_block('cz-plyr', __dir__ . '/block.php'),
    'enqueue_assets' => function(){
        wp_enqueue_style( 'cz-plyr', CZ_BLOCKS_URI . 'blocks/plyr/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);
        wp_enqueue_script( 'cz-plyr',  CZ_BLOCKS_URI . 'blocks/plyr/script.js', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version'], true );
    },
	'category'          => 'layout',
	'icon'              => 'format-video',
	'keywords'          => array( 'video', 'youtube', 'vimeo', 'plyr' ),
	'supports'          => array(
		'align' => true,
	)
]);
