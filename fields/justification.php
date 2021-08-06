<?php

acf_add_local_field_group([
	'key' => 'cz_justification',
	'title' => 'Justification',
	'fields' => [
		[
			'key' => 'cz_justification',
			'label' => 'Justification',
			'name' => 'cz_justification',
			'type' => 'select',
			'default_value' => 'left',
      'choices' => [
        'left'	=> 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ]
		]
	],
	'location' => [
		[
			[
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/cz-container',
			],
		]
	]
]);
