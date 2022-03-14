<?php

acf_add_local_field_group([
    'key' => 'cz_width',
    'title' => 'Full Width',
    'fields' => [
        [
            'key'    => 'cz_pixel_width_accordion',
            'label'  => 'Width',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_full_width',
            'label' => 'Full width',
            'name' => 'cz_full_width',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-hero',
            ]
        ],
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-section',
            ]
        ]
    ]
]);