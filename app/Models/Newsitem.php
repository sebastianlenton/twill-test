<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Newsitem extends Model 
{
    use HasMedias, HasFiles, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'published_date',
        'content',
        'link'
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
        'img_standard' => [
            'default' => [
                 [
                     'name' => 'landscape',
                     'ratio' => 16/9,
                 ],
             ],
        ],
        'img_mobile' => [
            'default' => [
                 [
                     'name' => 'landscape',
                     'ratio' => 1,
                 ],
             ],
        ]
    ];
}
