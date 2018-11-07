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

    protected $fillable = [
        'published',
        'title',
        /*'documented',
        
        'position',
        'video_url'*/
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    // public $translatedAttributes = [
    //     'title',
    //     'description',
    //     'active',
    // ];
    
    //uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
        'title',
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published',
        //'documented'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'design_page_images' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
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
        'index_page_image' => [
            'default' [
                [
                    'name' => '3:2',
                    'ratio' => 3 / 2,
                ]
            ]
        ]
    ];

    //Renamed relationship to use underscore like repeater type
    /*public function accordion_items()
    {
        // Fixed hasMany call with correct reference to AccordionItem model
        return $this->hasMany(AccordionItem::class);

    }*/

    
}
