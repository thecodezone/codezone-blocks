<?php

acf_register_block_type([
    'name' => 'cz-accordion',
    'title' => 'Accordion',
    'description' => 'A block-based accordion.',
    'render_callback' => cz_render_acf_block('cz-accordion', __dir__ . '/block.php'),
    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" style="color: #EE4538" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M576 32C611.3 32 640 60.65 640 96V416C640 451.3 611.3 480 576 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H576zM576 96H64V416H576V96z"/><path class="fa-secondary" d="M192 96H256V416H192V96zM384 96H448V416H384V96z"/></svg>',
    'enqueue_assets' => function(){
        wp_enqueue_style( 'cz-accordion', CZ_BLOCKS_URI . 'blocks/accordion/style.css', [], CZ_BLOCKS_VERSION);
        wp_enqueue_script( 'cz-accordion', CZ_BLOCKS_URI . 'blocks/accordion/script.js', [], CZ_BLOCKS_VERSION, true );
    },
    'category' => 'cz',
    'keywords' => ['accordion'],
    'supports' => [
        'mode' => false,
        'jsx' => true
    ],
    'mode' => 'preview'
]);

acf_register_block_type([
    'name' => 'cz-accordion-panel',
    'title' => 'Accordion panel.',
    'description' => 'A panel block to be used inside accordion blocks.',
    'render_callback' => cz_render_acf_block('cz-accordion-slide', __dir__ . '/panel.php'),
    'category' => 'layout',
    'icon' =>  '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="square-full" class="svg-inline--fa fa-square-full fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M-1 0v512h512V0zm432 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M431 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z"></path></g></svg>',
    'keywords' => ['accordion', 'panel'],
    'supports' => [
        'align' => true,
        'mode' => false,
        'jsx' => true
    ],
    'parent' => ['cz-accordion'],
    'mode' => 'preview'
]);
