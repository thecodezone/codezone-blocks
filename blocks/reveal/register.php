<?php
acf_register_block_type( [
    'name'            => 'cz-reveal',
    'title'           => 'Reveal',
    'description'     => 'A block that will fade-in when scrolled into view.',
    'render_callback' => cz_render_acf_block( 'cz-reveal', __dir__ . '/block.php' ),
    'enqueue_assets'  => function () {
        wp_enqueue_script( 'cz-scroll-reveal', 'https://unpkg.com/scrollreveal', [], CZ_BLOCKS_VERSION, true );
        wp_enqueue_style( 'cz-reveal', CZ_BLOCKS_URI . 'blocks/reveal/style.css', [], CZ_BLOCKS_VERSION );
        wp_enqueue_script( 'cz-reveal', CZ_BLOCKS_URI . 'blocks/reveal/script.js', [
            'cz-scroll-reveal'
        ], CZ_BLOCKS_VERSION, true );
    },
    'category'        => 'cz',
    'icon'            => '<svg style="color: #EE4538" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><defs><style>.fa-secondary{opacity:.4}</style></defs><path class="fa-primary" d="M272 216V80c0-12.94 7.781-24.61 19.75-29.56c12-4.906 25.72-2.203 34.87 6.937l30.06 30.06l78.06-78.07c12.5-12.5 32.76-12.5 45.26 .0003l22.62 22.62c12.5 12.5 12.5 32.76-.0002 45.26l-78.06 78.07l30.06 30.06c9.156 9.156 11.91 22.91 6.938 34.87c-4.938 11.95-16.63 19.75-29.56 19.75h-136C282.7 240 272 229.3 272 216z"/><path class="fa-secondary" d="M215.1 272h-136c-12.94 0-24.63 7.797-29.56 19.75C45.47 303.7 48.22 317.5 57.37 326.6l30.06 30.06l-78.06 78.07c-12.5 12.5-12.5 32.75-.0012 45.25l22.62 22.62c12.5 12.5 32.76 12.5 45.26 .0013l78.06-78.07l30.06 30.06c6.125 6.125 14.31 9.367 22.63 9.367c4.125 0 8.279-.7891 12.25-2.43c11.97-4.953 19.75-16.62 19.75-29.56V296C239.1 282.7 229.3 272 215.1 272z"/></svg>',
    'keywords'        => [ 'scroll', 'animation', 'fade', 'animate' ],
    'supports'        => [
        'align' => false,
        'mode'  => false,
        'jsx'   => true
    ],
    'mode'            => 'preview',
] );
