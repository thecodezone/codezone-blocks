<?php

acf_add_local_field_group([
    'key' => 'cz_reveal',
    'title' => 'Reveal',
    'fields' => [
        [
            'key'    => 'cz_reveal_animation',
            'label'  => 'Animation',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_reveal_delay',
            'label' => 'Delay',
            'name' => 'cz_reveal_delay',
            'type' => 'range',
            'default_value' => 0,
            'step_size' => 10,
            'append' => 'ms',
            'max' => 5000
        ],
        [
            'key' => 'cz_reveal_distance',
            'label' => 'Distance',
            'name' => 'cz_reveal_distance',
            'type' => 'range',
            'default_value' => 200,
            'step_size' => 10,
            'append' => 'px',
            'max' => 1000
        ],
        [
            'key' => 'cz_reveal_duration',
            'label' => 'Duration',
            'name' => 'cz_reveal_duration',
            'type' => 'range',
            'default_value' => 500,
            'step_size' => 10,
            'append' => 'ms',
            'max' => 1000
        ],
        [
            'key'           => 'cz_reveal_origin',
            'label'         => 'Origin',
            'name'          => 'cz_reveal_origin',
            'type'          => 'select',
            'default_value' => 'bottom',
            'choices'       => [
                'top'   => 'top',
                'right' => 'right',
                'bottom'  => 'bottom',
                'left'  => 'left'
            ],
        ],
        [
            'key' => 'cz_reveal_rotate',
            'label' => 'Rotate',
            'name' => 'cz_reveal_rotate',
            'type' => 'range',
            'default_value' => 0,
            'step_size' => 1,
            'append' => 'deg',
            'max' => 360
        ],
        [
            'key' => 'cz_reveal_scale',
            'label' => 'Scale',
            'name' => 'cz_reveal_scale',
            'type' => 'range',
            'default_value' => 1,
            'step_size' => 1,
            'max' => 10
        ],
        [
            'key'    => 'cz_reveal_config',
            'label'  => 'Config',
            'type'    => 'accordion',
        ],
        [

            'key' => 'cz_reveal_desktop',
            'label' => 'Desktop',
            'name' => 'cz_reveal_desktop',
            'type' => 'true_false',
            'ui' => true,
            'default_value' => true,
            'enables/disables animations on desktop browsers.'
        ],
        [

            'key' => 'cz_reveal_mobile',
            'label' => 'Mobile',
            'name' => 'cz_reveal_mobile',
            'type' => 'true_false',
            'ui' => true,
            'default_value' => true,
            'instructions' => 'enables/disables animations on mobile browsers.'
        ],
        [

            'key' => 'cz_reset',
            'label' => 'Reset',
            'name' => 'cz_reveal_reset',
            'type' => 'true_false',
            'ui' => true,
            'default_value' => false,
            'instructions' => 'Return animations to their initialized state when elements leave the screen.'
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-reveal',
            ],
        ]
    ]
]);
