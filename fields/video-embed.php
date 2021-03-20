<?php

acf_add_local_field_group([
	'key' => 'cz_video_embed',
	'title' => 'Video',
	'fields' => [
		[
			'key' => 'cz_video_url',
			'label' => 'YouTube or Vimeo URL',
			'name' => 'cz_video_url',
			'type' => 'text',
		],
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-plyr',
			],
		]
	]
]);
