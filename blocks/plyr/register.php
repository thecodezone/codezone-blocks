<?php
acf_register_block_type([
	'name'              => 'cz-plyr',
	'title'             => 'Plyr',
	'description'       => 'A video block embed that supports YouTube and Vimeo using plyr.',
	'render_callback'   => cz_render_acf_block('cz-plyr', __dir__ . '/block.php'),
    'enqueue_assets' => function() {
        wp_enqueue_style( 'plyr',  'https://cdn.plyr.io/3.7.2/plyr.css', [], CZ_BLOCKS_VERSION);
        wp_enqueue_script( 'plyr', 'https://cdn.plyr.io/3.7.2/plyr.js', [], CZ_BLOCKS_VERSION, true);
        wp_enqueue_style( 'cz-plyr', CZ_BLOCKS_URI . 'blocks/plyr/style.css', [], CZ_BLOCKS_VERSION);
        wp_enqueue_script( 'cz-plyr',  CZ_BLOCKS_URI . 'blocks/plyr/script.js', ['plyr'], CZ_BLOCKS_VERSION, true );
    },
	'category'          => 'cz',
    'icon'              => '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="video" class="svg-inline--fa fa-video fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M525.6 410.2L416 334.7V177.3l109.6-75.6c21.3-14.6 50.4.4 50.4 25.8v256.9c0 25.5-29.2 40.4-50.4 25.8z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M0 400.2V111.8A47.8 47.8 0 0 1 47.8 64h288.4a47.8 47.8 0 0 1 47.8 47.8v288.4a47.8 47.8 0 0 1-47.8 47.8H47.8A47.8 47.8 0 0 1 0 400.2z"></path></g></svg>',
    'keywords'          => array( 'video', 'youtube', 'vimeo', 'plyr' ),
	'supports'          => array(
		'align' => true,
	)
]);
