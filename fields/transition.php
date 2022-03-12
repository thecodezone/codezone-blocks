<?php
acf_add_local_field_group([
    'key' => 'cz_transition',
    'title' => 'Transitions',
    'fields' => [
        [
            'key'    => 'cz_transition_accordion',
            'label'  => 'Transitions',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_transition_speed',
            'label' => 'Speed',
            'name' => 'cz_transition_speed',
            'type' => 'range',
            'default_value' => '100',
            'step_size' => 5,
            'append' => 'ms',
            'max' => 1000
        ],
        [
            'key'           => 'cz_transition_effect',
            'label'         => 'Effect',
            'name'          => 'cz_transition_effect',
            'type'          => 'select',
            'default_value' => 'linear',
            'choices'       => [
                'ease'   => 'ease',
                'ease-in' => 'ease-in',
                'ease-out'  => 'ease-out',
                'ease-in-out'  => 'ease-in-out',
                'linear' => 'linear'
            ]
        ]
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-accordion',
            ],
        ],
    ]
]);