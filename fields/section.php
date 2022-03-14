<?php

acf_add_local_field_group([
	'key' => 'cz_section',
	'title' => 'Section',
	'fields' => [
        [
            'key'    => 'cz_section_accordion',
            'label'  => 'Section',
            'type'    => 'accordion',
        ],
		[
			'key' => 'cz_anchor',
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
