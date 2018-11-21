<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Project extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition;

    public function projecttags()
    {
        return $this->belongsToMany(Projecttag::class)->withPivot('position')->orderBy('position');
    }

    protected $fillable = [
        'published',
        'title',
        //'description',
        'video_url',
        'position',
        'undocumented',
        'publication_date',

        'project_page_description',
        'project_page_collaborators',
        
        'seo_meta_description',

    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    // public $translatedAttributes = [
    //     'title',
    //     'description',
    //     'active',
    // ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
         'title',
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published',
        'undocumented'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'design_page_images' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 0,
                ]
            ]
        ],
        'design_page_image_mobile' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ]
            ]
        ],

        'project_page_image' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 3 / 2,
                ]
            ]
        ],
        'project_page_image_mobile' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ]
            ]
        ],

        'index_page_image' => [
            'default' => [
                [
                    'name' => '3:2',
                    'ratio' => 3 / 2,
                ]
            ]
        ]
    ];
    
}
