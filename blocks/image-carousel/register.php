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
    'category' => 'cz',
    'icon' =>  `<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="fad" data-icon="images" class="svg-inline--fa fa-images fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M424.49 120.48a12 12 0 0 0-17 0L272 256l-39.51-39.52a12 12 0 0 0-17 0L160 272v48h352V208zM64 336V128H48a48 48 0 0 0-48 48v256a48 48 0 0 0 48 48h384a48 48 0 0 0 48-48v-16H144a80.09 80.09 0 0 1-80-80z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M528 32H144a48 48 0 0 0-48 48v256a48 48 0 0 0 48 48h384a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48zM208 80a48 48 0 1 1-48 48 48 48 0 0 1 48-48zm304 240H160v-48l55.52-55.52a12 12 0 0 1 17 0L272 256l135.52-135.52a12 12 0 0 1 17 0L512 208z"></path></g></svg>`,
    'keywords' => ['carousel', 'swiper', 'image', 'gallery'],
    'supports' => [
        'mode' => false,
        'jsx' => false
    ],
    'mode' => 'preview'
]);

