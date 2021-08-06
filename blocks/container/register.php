<?php
wp_enqueue_style( 'cz-container', CZ_BLOCKS_URI . 'blocks/container/style.css', [], get_plugin_data(CZ_BLOCKS_PLUGIN)['Version']);

acf_register_block_type([
    'name'              => 'cz-container',
    'title'             => 'Container',
    'description'       => 'A container for constraining content.',
    'render_callback'   => cz_render_acf_block('cz-container', __dir__ . '/block.php'),
    'category'          => 'cz',
    'icon' =>  '<svg aria-hidden="true" style="color: #EE4538" focusable="false" data-prefix="far" data-icon="border-outer" class="svg-inline--fa fa-border-outer fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 400H48V80h352zM212 184h24a16 16 0 0 0 16-16v-24a16 16 0 0 0-16-16h-24a16 16 0 0 0-16 16v24a16 16 0 0 0 16 16zm100 100h24a16 16 0 0 0 16-16v-24a16 16 0 0 0-16-16h-24a16 16 0 0 0-16 16v24a16 16 0 0 0 16 16zm-200 0h24a16 16 0 0 0 16-16v-24a16 16 0 0 0-16-16h-24a16 16 0 0 0-16 16v24a16 16 0 0 0 16 16zm100 0h24a16 16 0 0 0 16-16v-24a16 16 0 0 0-16-16h-24a16 16 0 0 0-16 16v24a16 16 0 0 0 16 16zm0 100h24a16 16 0 0 0 16-16v-24a16 16 0 0 0-16-16h-24a16 16 0 0 0-16 16v24a16 16 0 0 0 16 16z"></path></svg>',
    'keywords'          => array( 'container', 'center', 'align'),
    'supports'          => array(
        'mode' => false,
        'jsx' => true,
        'align' => false
    ),
    'mode'              => 'preview',
]);

