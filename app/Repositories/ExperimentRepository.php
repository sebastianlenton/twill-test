<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Experiment;

class ExperimentRepository extends ModuleRepository
{
    use HandleMedias, HandleFiles, HandleRevisions, HandleRepeaters;

    public function __construct(Experiment $model)
    {
        $this->model = $model;
    }


    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'experimentimages', 'Experimentimage');
        return $fields;
    }


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
        $this->updateRepeater($object, $fields, 'experimentimages', 'Experimentimage');
        
        parent::afterSave($object, $fields);
    }
}
