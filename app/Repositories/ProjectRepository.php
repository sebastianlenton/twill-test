<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    // implement the afterSave method
    public function afterSave($object, $fields) {
        // for exemple, to sync a many to many relationship
        //$this->updateMultiSelect($object, $fields, 'relationName');
        
        // which will simply run the following for you
        //$object->relationName()->sync($fields['relationName'] ?? []);
        
        // or, to save a oneToMany relationship
        //$this->updateOneToMany($object, $fields, 'relationName', 'formFieldName', 'relationAttribute')
        
        // or, to save a belongToMany relationship used with the browser field
        //$this->updateBrowser($object, $fields, 'relationName');
        
        // or, to save a hasMany relationship used with the repeater field
        $this->updateRepeater($object, $fields, 'accordionItems');
        
        // or, to save a belongToMany relationship used with the repeater field
        //$this->updateRepeaterMany($object, $fields, 'relationName', false);
        
        parent::afterSave($object, $fields);
    }

}
