<?php

acf_add_local_field_group([
	'key' => 'cz_screen_height',
	'title' => 'Height',
	'fields' => [
        [
            'key'    => 'cz_screen_height_accordion',
            'label'  => 'Height',
            'type'    => 'accordion',
        ],
        [
            'key'    => 'cz_screen_height_desktop_tab',
            'label'  => 'Desktop',
            'type'    => 'tab',
        ],
		[
			'key' => 'cz_screen_height',
			'label' => 'Height',
			'name' => 'cz_screen_height',
			'type' => 'range',
			'default_value' => '75',
			'step_size' => 5,
			'append' => 'vh',
			'max' => 100
		],
        [
            'key'    => 'cz_screen_height_mobile_tab',
            'label'  => 'Mobile',
            'type'    => 'tab',
        ],
        [
            'key' => 'cz_screen_height_mobile',
            'label' => 'Height',
            'name' => 'cz_screen_height_mobile',
            'type' => 'range',
            'default_value' => '75',
            'step_size' => 5,
            'append' => 'vh',
            'max' => 100
        ],
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
