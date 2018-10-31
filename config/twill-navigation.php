<?php

return [
    'projects' => [
        'title' => 'Projects',
        'module' => true
    ],
    'homepages' => [
        'title' => 'Homepage',
        'route' => 'admin.homepage',
    ],
    'projecttags' => [
        'title' => 'Project Tags',
        'module' => true
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'form'],
    ],
];
