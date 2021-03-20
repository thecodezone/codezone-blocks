<?php

acf_add_local_field_group([
	'key' => 'cz_section',
	'title' => 'Section',
	'fields' => [
		[
			'key' => 'cz_width',
			'label' => 'Width',
			'name' => 'cz_width',
			'type' => 'range',
			'default_value' => 100,
			'step_size' => 5,
			'append' => '%',
			'max' => 100
		],
		[
			'key' => 'anchor',
			'label' => 'Anchor',
			'name' => 'cz_anchor',
			'type' => 'text'
		]
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-section',
			],
		]
	]
]);
