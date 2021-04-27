<?php

acf_add_local_field_group([
	'key' => 'cz_images_group',
	'title' => 'Images',
	'fields' => [
		[
			'key' => 'cz_images',
			'label' => 'Images',
			'name' => 'cz_gallery',
			'type' => 'gallery',
		],
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-image-carousel',
			],
		],
	]
]);
