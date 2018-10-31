<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Project;

class ProjectRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions, HandleRepeaters;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    //Added getFormFields to ProjectRepository to retrieve accordion items using provided helpers
    public function getFormFields($object)
    {

        $fields = parent::getFormFields($object);

        $fields = $this->getFormFieldsForRepeater($object, $fields, 'accordion_items', 'AccordionItem');

        return $fields;
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

        //Updated call to updateRepeaterHelper to make it work with custom naming
        //$this->updateRepeater($object, $fields, 'accordionItems');
        $this->updateRepeater($object, $fields, 'accordion_items', 'AccordionItem');
        
        // or, to save a belongToMany relationship used with the repeater field
        //$this->updateRepeaterMany($object, $fields, 'relationName', false);
        
        parent::afterSave($object, $fields);
    }

}
