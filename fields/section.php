<?php

acf_add_local_field_group([
	'key' => 'cz_section',
	'title' => 'Section',
	'fields' => [
        [
            'key' => 'cz_full_width',
            'label' => 'Full width',
            'name' => 'cz_full_width',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
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
