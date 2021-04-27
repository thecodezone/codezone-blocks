<?php
wp_enqueue_style( 'cz-container', CZ_BLOCKS_URI . 'blocks/container/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);

acf_register_block_type([
    'name'              => 'cz-container',
    'title'             => 'Container',
    'description'       => 'A container for constraining content.',
    'render_callback'   => cz_render_acf_block('cz-container', __dir__ . '/block.php'),
    'category'          => 'layout',
    'icon'              => 'align-center',
    'keywords'          => array( 'container', 'center', 'align'),
    'supports'          => array(
        'mode' => false,
        'jsx' => true
    ),
    'mode'              => 'preview'
]);

