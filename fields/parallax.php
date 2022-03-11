<?php

acf_add_local_field_group([
    'key' => 'cz_parallax',
    'title' => 'Parallax',
    'fields' => [
        [
            'key'    => 'cz_parallax_animation',
            'label'  => 'Animation',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_parallax_from',
            'label' => 'From',
            'name' => 'cz_parallax_variable',
            'type' => 'text',
            'default_value' => "25vh",
            'instructions' => "Be sure to append a unit like 'px', '%', or 'vh'."
        ],
        [
            'key' => 'cz_parallax_to',
            'label' => 'To',
            'name' => 'cz_parallax_to',
            'type' => 'text',
            'default_value' => "-25vh",
            'instructions' => "Be sure to append a unit like 'px', '%', or 'vh'."
        ],
        [
            'key'    => 'cz_reveal_start',
            'label'  => 'Start',
            'type'    => 'accordion',
        ],
        [
            'key'           => 'cz_parallax_element_start',
            'label'         => 'Element',
            'name'          => 'cz_parallax_element_start',
            'type'          => 'select',
            'default_value' => 'top',
            'choices'       => [
                'top'   => 'top',
                'bottom' => 'bottom'
            ],
        ],
        [
            'key'           => 'cz_parallax_screen_start',
            'label'         => 'Screen',
            'name'          => 'Screen',
            'type'          => 'select',
            'default_value' => 'bottom',
            'choices'       => [
                'top'   => 'top',
                'middle' => 'middle',
                'bottom' => 'bottom'
            ],
        ],
        [
            'key'    => 'cz_reveal_end',
            'label'  => 'End',
            'type'    => 'accordion',
        ],
        [
            'key'           => 'cz_parallax_element_end',
            'label'         => 'Element',
            'name'          => 'cz_parallax_element_end',
            'type'          => 'select',
            'default_value' => 'bottom',
            'choices'       => [
                'top'   => 'top',
                'bottom' => 'bottom'
            ],
        ],
        [
            'key'           => 'cz_parallax_screen_end',
            'label'         => 'Screen',
            'name'          => 'cz_parallax_screen_end',
            'type'          => 'select',
            'default_value' => 'top',
            'choices'       => [
                'top'   => 'top',
                'middle' => 'middle',
                'bottom' => 'bottom'
            ],
        ],
        [
            'key'    => 'cz_reveal_custom',
            'label'  => 'Custom',
            'type'    => 'accordion',
        ],
        [

            'key' => 'cz_parallax_custom',
            'label' => 'Custom',
            'name' => 'cz_parallax_custom',
            'type' => 'true_false',
            'ui' => true,
            'default' => false,
            'instructions' => 'Developers only. Use a custom animation instead of the default configuration.'
        ],
        [
            'key' => 'cz_parallax_props',
            'label' => 'Props JSON',
            'name' => 'cz_parallax_props',
            'type' => 'textarea',
            'instructions' => "See https://basicscroll.electerious.com for example.",
            'conditional_logic' => [
                [
                    'field' => 'cz_parallax_custom',
                    'operator' => '==',
                    'value' => '1',
                ]
            ]
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-parallax',
            ],
        ]
    ]
]);
