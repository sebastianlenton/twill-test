<?php

return [
    'block_editor' => [
        'blocks' => [
            'quote' => [
                'title' => 'Quote',
                'icon' => 'text',
                'component' => 'a17-block-quote',
            ],
            'editor' => [
                'title' => 'Editor',
                'icon' => 'text',
                'component' => 'a17-block-editor',
            ],
            'accordion' => [
                'title' => 'Accordion',
                'icon' => 'text',
                'component' => 'a17-block-accordion',
            ],
            'address' => [
                'title' => 'Address',
                'icon' => 'text',
                'component' => 'a17-block-address',
            ],
            'projecttag' => [
                'title' => 'Project Tags',
                'icon' => 'text',
                'component' => 'a17-block-projecttag',
            ]
        ],
        'repeaters' => [
            'accordion_item' => [
                'title' => 'Accordion',
                'trigger' => 'Add accordion',
                'component' => 'a17-block-accordion_item',
                'max' => 10,
            ],
        ],
        'browser_route_prefixes' => [
            //'projecttags' => 'content',
        ],
    ]
];