<?php

acf_add_local_field_group([
	'key' => 'cz_horizontal_gradient',
	'title' => 'Gradient',
	'fields' => [
		[

			'key' => 'cz_left_color',
			'label' => 'Left Color',
			'name' => 'cz_left_color',
			'type' => 'color_picker'
		],
		[

			'key' => 'cz_right_color',
			'label' => 'Right Color',
			'name' => 'cz_right_color',
			'type' => 'color_picker'
		],
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-rule',
			],
		],
	]
]);
