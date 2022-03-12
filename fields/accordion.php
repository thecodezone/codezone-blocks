<?php

acf_add_local_field_group([
    'key' => 'cz_accordion',
    'title' => 'Accordion',
    'fields' => [
        [
            'key'    => 'cz_accordion',
            'label'  => 'Accordion',
            'type'    => 'accordion',
        ],
        [
            'key' => 'cz_accordion_orientation',
            'label' => 'Orientation',
            'name' => 'cz_accordion_orientation',
            'type'          => 'select',
            'default_value' => 'horizontal',
            'choices'       => [
                'horizontal'  => 'horizontal',
                'vertical' => 'vertical'
            ],
        ],
        [
            'key'    => 'cz_accordion_desktop_tab',
            'label'  => 'Desktop',
            'type'    => 'tab',
        ],
        [
            'key' => 'cz_accordion_closed_panel_size',
            'label' => 'Closed Panel Size',
            'name' => 'cz_accordion_closed_panel_size',
            'type' => 'text',
            'default_value' => '75px'
        ],
        [

            'key' => 'cz_carousel_hover',
            'label' => 'Open Panels on hover?',
            'name' => 'cz_carousel_hover',
            'type' => 'true_false',
            'ui' => true,
            'default' => false
        ],
        [
            'key'    => 'cz_accordion_mobile_tab',
            'label'  => 'Mobile',
            'type'    => 'tab',
        ],
        [
            'key' => 'cz_accordion_closed_panel_size_mobile',
            'label' => 'Closed Panel Size',
            'name' => 'cz_accordion_closed_panel_size_mobile',
            'type' => 'text',
            'default_value' => '25px'
        ],
    ],
    'location' => [
        [
            [
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/cz-accordion',
            ],
        ],
    ]
]);
