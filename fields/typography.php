<?php

acf_add_local_field_group([
	'key' => 'cz_typography',
	'title' => 'Typography',
	'fields' => [
        [
            'key'    => 'cz_typography_accordion',
            'label'  => 'Typography',
            'type'    => 'accordion',
        ],
		[

			'key' => 'cz_text_color',
			'label' => 'Text Color',
			'name' => 'cz_text_color',
			'type' => 'color_picker'
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
