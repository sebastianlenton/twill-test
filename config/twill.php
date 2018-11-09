<?php

return [
    'block_editor' => [
        'blocks' => [

            'shortformtext' => [
                'title' => 'Shortform text',
                'icon' => 'text',
                'component' => 'a17-block-shortformtext',
            ],

            'longformtext' => [
                'title' => 'Longform text',
                'icon' => 'text',
                'component' => 'a17-block-longformtext',
            ],

            'imgtext' => [
                'title' => 'Image (variable)',
                'icon' => 'text',
                'component' => 'a17-block-imgtext',
            ],

            'imgfullwidth' => [
                'title' => 'Image (full width)',
                'icon' => 'text',
                'component' => 'a17-block-imgfullwidth',
            ],
        ],

        'crops' => [
            'imgfullwidth' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 0,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
            'imgfullwidth-mobile' => [
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 0,
                    ],
                ],
            ],
        ],
        


        /*'repeaters' => [
            'accordion_items' => [
                'title' => 'Accordion',
                'trigger' => 'Add accordion',
                'component' => 'a17-block-accordion_item',
                'max' => 10,
            ],
        ],*/
        //'browser_route_prefixes' => [
            //'projecttags' => 'content',
        //],
    ],
    'enabled' => [
        'settings' => true
    ]
];