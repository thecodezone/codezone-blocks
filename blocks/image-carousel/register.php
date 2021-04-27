<?php
wp_enqueue_script( 'cz-swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
wp_enqueue_style( 'cz-swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

acf_register_block_type([
    'name' => 'cz-image-carousel',
    'title' => 'Image Carousel',
    'description' => 'An image carousel.',
    'render_callback' => cz_render_acf_block('cz-image-carousel', __dir__ . '/block.php'),
    'enqueue_assets' => function(){
        wp_enqueue_style( 'cz-image-carousel', CZ_BLOCKS_URI . 'blocks/image-carousel/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);
        wp_enqueue_script( 'cz-image-carousel', CZ_BLOCKS_URI . 'blocks/image-carousel/script.js', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version'], true );
    },
    'category' => 'layout',
    'icon' => 'image-flip-horizontal',
    'keywords' => ['carousel', 'swiper', 'image', 'gallery'],
    'supports' => [
        'mode' => false,
        'jsx' => false
    ],
    'mode' => 'preview'
]);

