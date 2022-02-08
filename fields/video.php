<?php

$has_video = [
	'field' => 'cz_has_video',
	'operator' => '==',
	'value' => '1',
];

acf_add_local_field_group([
	'key' => 'cz_video_group',
	'title' => 'Video',
	'fields' => [
        [
            'key'    => 'cz_video_accordion',
            'label'  => 'Video',
            'type'    => 'accordion',
        ],
		[

			'key' => 'cz_has_video',
			'label' => 'Video',
			'name' => 'cz_has_video',
			'type' => 'true_false',
			'ui' => true,
			'default' => false
		],
		[
			'key' => 'cz_video',
			'label' => 'Video',
			'name' => 'cz_video',
			'type' => 'file',
			'conditional_logic' => [$has_video]
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
