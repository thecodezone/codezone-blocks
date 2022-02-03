<?php

$has_background = [
    'field'    => 'cz_has_background',
    'operator' => '==',
    'value'    => '1',
];

$has_background_position = [
    'field'    => 'cz_has_background_position',
    'operator' => '==',
    'value'    => '1',
];

acf_add_local_field_group( [
    'key'      => 'cz_background',
    'title'    => 'Background',
    'fields'   => [
        [

            'key'     => 'cz_has_background',
            'label'   => 'Background',
            'name'    => 'cz_has_background',
            'type'    => 'true_false',
            'ui'      => true,
            'default' => false
        ],
        [

            'key'               => 'cz_background_color',
            'label'             => 'Background Color',
            'name'              => 'cz_background_color',
            'type'              => 'color_picker',
            'conditional_logic' => [ $has_background ]
        ],
        [

            'key'               => 'cz_background_overlay_opacity',
            'label'             => 'Background Transparency',
            'name'              => 'cz_background_overlay_opacity',
            'type'              => 'range',
            'default_value'     => 0,
            'step_size'         => 1,
            'max'               => 10,
            'conditional_logic' => [ $has_background ]
        ],
        [
            'key'               => 'cz_background_image',
            'label'             => 'Background Image',
            'name'              => 'cz_background_image',
            'type'              => 'image',
            'conditional_logic' => [ $has_background ]
        ],
        [
            'key'               => 'cz_background_image_mobile',
            'label'             => 'Background Image Mobile',
            'name'              => 'cz_background_image_mobile',
            'type'              => 'image',
            'conditional_logic' => [ $has_background ]
        ],
        [

            'key'               => 'cz_background_position_left',
            'label'             => 'Background Left Position',
            'name'              => 'cz_background_position_left',
            'type'              => 'range',
            'default_value'     => 50,
            'step_size'         => 10,
            'max'               => 100,
            'append'            => '%',
            'conditional_logic' => [ $has_background ]
        ],
        [

            'key'               => 'cz_background_position_top',
            'label'             => 'Background Top Position',
            'name'              => 'cz_background_position_top',
            'type'              => 'range',
            'default_value'     => 50,
            'step_size'         => 10,
            'max'               => 100,
            'append'            => '%',
            'conditional_logic' => [ $has_background ]
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
    ]
] );
