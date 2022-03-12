<?php

$has_padding = [
	'field' => 'cz_has_padding',
	'operator' => '==',
	'value' => '1',
];

acf_add_local_field_group([
	'key' => 'cz_padding',
	'title' => 'Padding',
	'fields' => [
        [
            'key'    => 'cz_padding_accordion',
            'label'  => 'Padding',
            'type'    => 'accordion',
        ],
		[

			'key' => 'cz_has_padding',
			'label' => 'Padding',
			'name' => 'cz_has_padding',
			'type' => 'true_false',
			'ui' => true,
			'default' => false
		],
        [
            'key'    => 'cz_padding_desktop_tab',
            'label'  => 'Desktop',
            'type'    => 'tab',
            'conditional_logic' => [$has_padding]
        ],
		[
			'key' => 'cz_top_padding',
			'label' => 'Top Padding',
			'name' => 'cz_top_padding',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_right_padding',
			'label' => 'Right Padding',
			'name' => 'cz_right_padding',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_bottom_padding',
			'label' => 'Bottom Padding',
			'name' => 'cz_bottom_padding',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_left_padding',
			'label' => 'Left Padding',
			'name' => 'cz_left_padding',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
        [
            'key'    => 'cz_padding_mobile_tab',
            'label'  => 'Mobile',
            'type'    => 'tab',
            'conditional_logic' => [$has_padding]
        ],
		[
			'key' => 'cz_top_padding_mobile',
			'label' => 'Top Padding',
			'name' => 'cz_top_padding_mobile',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_right_padding_mobile',
			'label' => 'Right Padding',
			'name' => 'cz_right_padding_mobile',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_bottom_padding_mobile',
			'label' => 'Bottom Padding',
			'name' => 'cz_bottom_padding_mobile',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		],
		[
			'key' => 'cz_left_padding_mobile',
			'label' => 'Left Padding',
			'name' => 'cz_left_padding_mobile',
			'type' => 'range',
			'default_value' => '25',
			'step_size' => 5,
			'append' => 'px',
			'conditional_logic' => [$has_padding]
		]
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-hero',
			],
		],
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-section',
			],
		],
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-card',
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
]);
