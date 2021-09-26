<?php

acf_register_block_type([
    'name' => 'cz-carousel',
    'title' => 'Carousel',
    'description' => 'A carousel.',
    'render_callback' => cz_render_acf_block('cz-carousel', __dir__ . '/block.php'),
    'icon' => '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="presentation" class="svg-inline--fa fa-presentation fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M480 64h64v256a32 32 0 0 1-32 32H64a32 32 0 0 1-32-32V64h64v224h384z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M560 0H16A16 16 0 0 0 0 16v32a16 16 0 0 0 16 16h544a16 16 0 0 0 16-16V16a16 16 0 0 0-16-16zM320 386.75V352h-64v34.75l-75.31 75.31a16 16 0 0 0 0 22.63l22.62 22.62a16 16 0 0 0 22.63 0L288 445.25l62.06 62.06a16 16 0 0 0 22.63 0l22.62-22.62a16 16 0 0 0 0-22.63z"></path></g></svg>',
    'enqueue_assets' => function(){
        wp_enqueue_script( 'cz-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
        wp_enqueue_style( 'cz-swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
        wp_enqueue_style( 'cz-carousel', CZ_BLOCKS_URI . 'blocks/carousel/style.css', [], CZ_BLOCKS_VERSION);
        wp_enqueue_script( 'cz-carousel', CZ_BLOCKS_URI . 'blocks/carousel/script.js', [], CZ_BLOCKS_VERSION, true );
    },
    'category' => 'cz',
    'keywords' => ['carousel', 'swiper'],
    'supports' => [
        'mode' => false,
        'jsx' => true
    ],
    'mode' => 'preview'
]);

acf_register_block_type([
    'name' => 'cz-carousel-slide',
    'title' => 'Carousel slide.',
    'description' => 'A slide block to be used inside carouse blocks.',
    'render_callback' => cz_render_acf_block('cz-carousel-slide', __dir__ . '/slide.php'),
    'category' => 'layout',
    'icon' =>  '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="square-full" class="svg-inline--fa fa-square-full fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M-1 0v512h512V0zm432 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M431 417.33A14.67 14.67 0 0 1 416.33 432H93.67A14.67 14.67 0 0 1 79 417.33V94.67A14.67 14.67 0 0 1 93.67 80h322.66A14.67 14.67 0 0 1 431 94.67z"></path></g></svg>',
    'keywords' => ['carousel', 'swiper', 'slide'],
    'supports' => [
        'mode' => false,
        'jsx' => true
    ],
    'mode' => 'preview'
]);