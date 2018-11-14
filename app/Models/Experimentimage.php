<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Experimentimage extends Model 
{
    use HasMedias;

    public $table = "experimentimages";

    protected $fillable = [
        'published',
        'title',
        'caption',
        'image_width',
        'experiment_id',
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
        'experiment_image' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1 / 1
                ]
            ]
        ],
    ];

}
