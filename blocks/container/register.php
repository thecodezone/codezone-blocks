<?php
acf_register_block_type([
    'name'              => 'cz-container',
    'title'             => 'Container',
    'description'       => 'A container for constraining content.',
    'render_callback'   => cz_render_acf_block('cz-container', __dir__ . '/block.php'),
    'enqueue_style'     => CZ_BLOCKS_URI . 'blocks/container/style.css',
    'category'          => 'layout',
    'icon'              => 'align-center',
    'keywords'          => array( 'container', 'center', 'align'),
    'supports'          => array(
        'mode' => false,
        'jsx' => true
    ),
    'mode'              => 'preview'
]);

