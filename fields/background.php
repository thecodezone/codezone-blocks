<?php

$has_background_position = [
    'field'    => 'cz_has_background_position',
    'operator' => '==',
    'value'    => '1',
];

acf_add_local_field_group( [
    'key'      => 'cz_background',
    'title'    => 'Background',
    'style'    => 'default',
    'fields'   => [
        [
            'key'   => 'cz_background_accordion',
            'label' => 'Background',
            'type'  => 'accordion',
        ],
        [
            'key'   => 'cz_background_desktop_tab',
            'label' => 'Desktop',
            'type'  => 'tab',
        ],
        [

            'key'   => 'cz_background_color',
            'label' => 'Background Color',
            'name'  => 'cz_background_color',
            'type'  => 'color_picker',
        ],
        [

            'key'           => 'cz_background_overlay_opacity',
            'label'         => 'Background Transparency',
            'name'          => 'cz_background_overlay_opacity',
            'type'          => 'range',
            'default_value' => 0,
            'step_size'     => 1,
            'max'           => 10,
        ],
        [
            'key'   => 'cz_background_image',
            'label' => 'Background Image',
            'name'  => 'cz_background_image',
            'type'  => 'image',
        ],
        [

            'key'           => 'cz_background_position_left',
            'label'         => 'Background Left Position',
            'name'          => 'cz_background_position_left',
            'type'          => 'range',
            'default_value' => 50,
            'step_size'     => 10,
            'max'           => 100,
            'append'        => '%',
        ],
        [

            'key'           => 'cz_background_position_top',
            'label'         => 'Background Top Position',
            'name'          => 'cz_background_position_top',
            'type'          => 'range',
            'default_value' => 50,
            'step_size'     => 10,
            'max'           => 100,
            'append'        => '%',
        ],
        [
            'key'   => 'cz_background_mobile_tab',
            'label' => 'Mobile',
            'type'  => 'tab',
        ],
        [
            'key'   => 'cz_background_image_mobile',
            'label' => 'Background Image',
            'name'  => 'cz_background_image_mobile',
            'type'  => 'image',
        ],
    ],
    'location' => [
        [
            [
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/cz-hero',
            ],
        ],
        [
            [
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/cz-section',
            ],
        ],
        [
            [
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/cz-card',
            ],
        ],
        [
            [
                'param'    => 'block',
                'operator' => '==',
                'value'    => 'acf/cz-accordion-panel',
            ]
        ]
    ]
] );
