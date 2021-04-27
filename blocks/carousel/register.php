<?php

acf_register_block_type([
    'name' => 'cz-carousel',
    'title' => 'Carousel',
    'description' => 'A carousel.',
    'render_callback' => cz_render_acf_block('cz-carousel', __dir__ . '/block.php'),
    'enqueue_assets' => function(){
        wp_enqueue_script( 'cz-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
        wp_enqueue_style( 'cz-swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
        wp_enqueue_style( 'cz-carousel', CZ_BLOCKS_URI . 'blocks/carousel/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);
        wp_enqueue_script( 'cz-carousel', CZ_BLOCKS_URI . 'blocks/carousel/script.js', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version'], true );
    },
    'category' => 'layout',
    'icon' => 'image-flip-horizontal',
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
    'render_callback' => cz_render_acf_block('cz-carousel', __dir__ . '/slide.php'),
    'category' => 'layout',
    'icon' => 'columns',
    'keywords' => ['carousel', 'swiper', 'slide'],
    'supports' => [
        'mode' => false,
        'jsx' => true
    ],
    'mode' => 'preview'
]);