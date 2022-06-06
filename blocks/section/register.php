<?php


acf_register_block_type([
	'name'              => 'cz_section',
	'title'             => 'Section',
	'description'       => 'A page section. The basic building block of a page.',
	'render_callback'   => cz_render_acf_block('cz-section', __dir__ . '/block.php'),
	'category'          => 'cz',
    'enqueue_assets' => function(){
        wp_enqueue_style( 'cz-section', CZ_BLOCKS_URI . 'blocks/section/style.css', [], CZ_BLOCKS_VERSION);
    },
    'icon'              => '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="layer-group" class="svg-inline--fa fa-layer-group fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M12.41 236.31L70.51 210l161.63 73.27a57.64 57.64 0 0 0 47.72 0L441.5 210l58.09 26.33c16.55 7.5 16.55 32.5 0 40L266.64 381.9a25.68 25.68 0 0 1-21.29 0L12.41 276.31c-16.55-7.5-16.55-32.5 0-40z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M12.41 148l232.94 105.7a25.61 25.61 0 0 0 21.29 0L499.58 148c16.55-7.51 16.55-32.52 0-40L266.65 2.32a25.61 25.61 0 0 0-21.29 0L12.41 108c-16.55 7.5-16.55 32.52 0 40zm487.18 216.11l-57.87-26.23-161.86 73.37a57.64 57.64 0 0 1-47.72 0L70.29 337.88l-57.88 26.23c-16.55 7.5-16.55 32.5 0 40L245.35 509.7a25.68 25.68 0 0 0 21.29 0l233-105.59c16.5-7.5 16.5-32.5-.05-40z"></path></g></svg>',
	'keywords'          => array( 'section', 'box' ),
	'supports'          => array(
		'align' => true,
		'mode' => false,
		'jsx' => true
	),
	'mode'              => 'preview'
]);
