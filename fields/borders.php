<?php



acf_add_local_field_group([
	'key' => 'cz_borders',
	'title' => 'Borders',
	'fields' => [
        [
            'key'    => 'cz_borders_accordion',
            'label'  => 'Borders',
            'type'    => 'accordion',
        ],
		[
			'key' => 'cz_border_color',
			'label' => 'Border Color',
			'name' => 'cz_border_color',
			'type' => 'color_picker',
		],
		[
			'key' => 'cz_top_border',
			'label' => 'Top Border',
			'name' => 'cz_top_border',
			'type' => 'range',
			'default_value' => '0',
			'step_size' => 1,
			'append' => 'px',
			'max' => 10,
		],
		[
			'key' => 'cz_right_border',
			'label' => 'Right Border',
			'name' => 'cz_right_border',
			'type' => 'range',
			'default_value' => '0',
			'step_size' => 1,
			'append' => 'px',
			'max' => 10,
		],
		[
			'key' => 'cz_bottom_border',
			'label' => 'Bottom Border',
			'name' => 'cz_bottom_border',
			'type' => 'range',
			'default_value' => '0',
			'step_size' => 1,
			'append' => 'px',
			'max' => 10,
		],
		[
			'key' => 'cz_left_border',
			'label' => 'Left Border',
			'name' => 'cz_left_border',
			'type' => 'range',
			'default_value' => '0',
			'step_size' => 1,
			'append' => 'px',
			'max' => 10,
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
	]
]);
