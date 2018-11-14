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

            'project_preview' => [
                'title' => 'Project preview',
                'icon' => 'image',
                'component' => 'a17-block-project_preview',
            ],

            'experiment_preview' => [
                'title' => 'Experiment preview',
                'icon' => 'image',
                'component' => 'a17-block-experiment_preview',
            ],

            'news' => [
                'title' => 'News story',
                'icon' => 'text',
                'component' => 'a17-block-news',
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
            'experiment_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1 / 1
                    ],
                ],
            ],
        ],

        'repeaters' => [
            'experimentimages' => [
                'title' => 'Images',
                'trigger' => 'Add image',
                'component' => 'a17-block-experimentimage',
                'max' => 3,
            ],
        ],

        'browser_route_prefixes' => [
            'projects' => 'designpages',
            'experiments' => 'designpages',
            'newsitems' => 'designpages',
        ],

    ],
    'enabled' => [
        'settings' => true
    ]
];