<?php

acf_add_local_field_group([
    'key' => 'cz_carousel',
    'title' => 'Carousel',
    'fields' => [
        [
            'key'    => 'cz_carousel_accordion',
            'label'  => 'Carousel',
            'type'    => 'accordion',
        ],
        [
			'key' => 'cz_carousel_theme_color',
			'label' => 'Carousel Theme Color',
			'name' => 'cz_carousel_theme_color',
			'type' => 'color_picker',
		],
        [

            'key' => 'cz_carousel_auto_height',
            'label' => 'Auto height',
            'name' => 'cz_carousel_auto_height',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
        [

            'key' => 'cz_carousel_loop',
            'label' => 'Loop',
            'name' => 'cz_carousel_loop',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
        [

            'key' => 'cz_carousel_auto_play',
            'label' => 'Auto play',
            'name' => 'cz_carousel_auto_play',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
        [
            'key' => 'cz_carousel_slides_per_view',
            'label' => 'Slides per view',
            'name' => 'cz_carousel_slides_per_view',
            'type' => 'range',
            'default_value' => '1',
            'step_size' => 1,
            'max' => 4
        ],
        [
            'key' => 'cz_carousel_slides_per_group',
            'label' => 'Slides per group',
            'name' => 'cz_carousel_slides_per_group',
            'type' => 'range',
            'default_value' => '1',
            'step_size' => 1,
            'max' => 4
        ],
        [
            'key' => 'cz_carousel_space_between',
            'label' => 'Space between slides',
            'name' => 'cz_carousel_space_between',
            'type' => 'range',
            'default_value' => '25',
            'step_size' => 1,
            'max' => 50
        ],
        [
            'key' => 'cz_carousel_pagination',
            'label' => 'Pagination (Dots)',
            'name' => 'cz_carousel_pagination',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
        [
            'key' => 'cz_carousel_navigation',
            'label' => 'Navigation (Arrows)',
            'name' => 'cz_carousel_navigation',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-carousel',
            ]
        ],
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-image-carousel',
            ]
        ],
    ]
]);
