<?php

$has_borders = [
	'field' => 'cz_has_borders',
	'operator' => '==',
	'value' => '1',
];

acf_add_local_field_group([
	'key' => 'cz_borders',
	'title' => 'Borders',
	'fields' => [
		[

			'key' => 'cz_has_borders',
			'label' => 'Borders',
			'name' => 'cz_has_borders',
			'type' => 'true_false',
			'ui' => true,
			'default' => false
		],
		[
			'key' => 'cz_border_color',
			'label' => 'Border Color',
			'name' => 'cz_border_color',
			'type' => 'color_picker',
			'conditional_logic' => [$has_borders]
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
			'conditional_logic' => [$has_borders]
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
			'conditional_logic' => [$has_borders]
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
			'conditional_logic' => [$has_borders]
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
			'conditional_logic' => [$has_borders]
		],
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
	]
]);
