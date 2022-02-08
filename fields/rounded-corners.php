<?php

acf_add_local_field_group([
    'key' => 'cz_rounded_corners',
    'title' => 'Rounded Corners',
    'fields' => [
        [
            'key'    => 'cz_corners_accordion',
            'label'  => 'Corners',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_border_radius',
            'label' => 'Rounded Corners',
            'name' => 'cz_border_radius',
            'type' => 'range',
            'default_value' => '0',
            'step_size' => 1,
            'append' => 'px',
            'max' => 25
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-card',
            ],
        ]
    ]
]);
