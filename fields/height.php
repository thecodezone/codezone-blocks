<?php

acf_add_local_field_group([
	'key' => 'cz_height',
	'title' => 'Height',
	'fields' => [
        [
            'key'    => 'cz_height_accordion',
            'label'  => 'Height',
            'type'    => 'accordion',
        ],
		[
			'key' => 'cz_height',
			'label' => 'Height',
			'name' => 'cz_height',
			'type' => 'range',
			'default_value' => '10',
			'step_size' => 5,
			'append' => 'px',
			'max' => 100
		]
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-rule',
			],
		]
	]
]);
