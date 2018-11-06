<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Infopage extends Model 
{
    use HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'intro',
        'capabilities',
        'intro_sm'
        // 'position',
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    // public $translatedAttributes = [
    //     'title',
    //     'description',
    //     'active',
    // ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    // public $slugAttributes = [
    //     'title',
    // ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'main_image' => [
            'default' => [
                [
                    'name' => '3:2',
                    'ratio' => 3 / 2,
                ]
            ]
        ],
        'sm_image' => [
            'default' => [
                [
                    'name' => '3:2',
                    'ratio' => 3 / 2,
                ]
            ]
        ],
    ];
}
