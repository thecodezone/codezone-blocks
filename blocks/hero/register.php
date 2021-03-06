<?php

acf_register_block_type([
	'name'              => 'cz-hero',
	'title'             => 'Hero',
	'description'       => 'The hero of the page. Great for large video or image sections.',
	'render_callback'   => cz_render_acf_block('cz-hero', __dir__ . '/block.php'),
	'category'          => 'cz',
    'enqueue_assets' => function(){
        wp_enqueue_style( 'cz-hero', CZ_BLOCKS_URI . 'blocks/hero/style.css', [], CZ_BLOCKS_VERSION);
    },
    'icon'              => '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fas" data-icon="photo-video" class="svg-inline--fa fa-photo-video fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M608 0H160a32 32 0 0 0-32 32v96h160V64h192v320h128a32 32 0 0 0 32-32V32a32 32 0 0 0-32-32zM232 103a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm352 208a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9v-30a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm0-104a9 9 0 0 1-9 9h-30a9 9 0 0 1-9-9V73a9 9 0 0 1 9-9h30a9 9 0 0 1 9 9zm-168 57H32a32 32 0 0 0-32 32v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zM96 224a32 32 0 1 1-32 32 32 32 0 0 1 32-32zm288 224H64v-32l64-64 32 32 128-128 96 96z"></path></svg>',
    'keywords'          => array( 'hero', 'image', 'video', 'cover' ),
	'supports'          => array(
		'align' => true,
		'mode' => false,
		'jsx' => true
	),
	'mode'              => 'preview',
]);

