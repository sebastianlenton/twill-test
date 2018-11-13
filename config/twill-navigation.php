<?php

return [

    'designpages' => [
        'title' => 'Design',
        'route' => 'admin.designpages.designpages.index',
        'primary_navigation' => [
            'projects' => [
                'title' => 'Projects',
                'route' => 'admin.designpages.projects.index'
            ],
            'projecttags' => [
                'title' => 'Project Tags',
                'route' => 'admin.designpages.projecttags.index'
            ],
            'newsitems' => [
                'title' => 'News',
                'route' => 'admin.designpages.newsitems.index'
            ],
            'experiments' => [
                'title' => 'Experiments',
                'route' => 'admin.designpages.experiments.index'
            ],
        ],
    ],


    //temp

    'projects' => [
        'title' => 'Projects',
        'module' => true
    ],

    'experiments' => [
        'title' => 'Experiments',
        'module' => true
    ],

    //endtemp

    'infopages' => [
        'title' => 'Info',
        'route' => 'admin.infopages.infopages.index',
        'primary_navigation' => [
            'infopages' => [
                'title' => 'Info',
                'module' => true,
            ],
            'staffmembers' => [
                'title' => 'Team',
                'module' => true,
            ],
            'newslinks' => [
                'title' => 'News Links',
                'module' => true,
            ],
            'jobs' => [
                'title' => 'Jobs',
                'module' => true,
            ]
        ]
    ],

    'settings' => [
        'title' => 'Contact Details',
        'route' => 'admin.settings',
        'params' => ['section' => 'form'],
    ],

];