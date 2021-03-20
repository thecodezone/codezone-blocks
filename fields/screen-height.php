<?php

acf_add_local_field_group([
	'key' => 'cz_screen_height',
	'title' => 'Height',
	'fields' => [
		[
			'key' => 'cz_screen_height',
			'label' => 'Height',
			'name' => 'cz_screen_height',
			'type' => 'range',
			'default_value' => '75',
			'step_size' => 5,
			'append' => 'vh',
			'max' => 100
		]
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-hero',
			],
		]
	]
]);
