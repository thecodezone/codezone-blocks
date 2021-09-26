<?php

wp_enqueue_style( 'cz-card', CZ_BLOCKS_URI . 'blocks/card/style.css', [], CZ_BLOCKS_VERSION);

acf_register_block_type([
	'name'              => 'cz_card',
	'title'             => 'Card',
	'description'       => 'A card.',
	'render_callback'   => cz_render_acf_block('cz-card', __dir__ . '/block.php'),
	'category'          => 'cz',
    'icon'              => '<svg style="color: #EE4538" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="square-full" class="svg-inline--fa fa-square-full fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M-1 0v512h512V0zm432 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M431 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z"></path></g></svg>',
	'keywords'          => array( 'card', 'box' ),
	'supports'          => array(
		'align' => true,
		'mode' => false,
		'jsx' => true
	),
	'mode'              => 'preview'
]);
