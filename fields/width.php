<?php

acf_add_local_field_group([
    'key' => 'cz_width',
    'title' => 'Width',
    'fields' => [
        [
            'key' => 'cz_pixel_width',
            'label' => 'Width',
            'name' => 'cz_pixel_width',
            'type' => 'range',
            'default_value' => 0,
            'step_size' => 5,
            'append' => '%',
            'max' => 2500
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-container',
            ],
        ]
    ]
]);