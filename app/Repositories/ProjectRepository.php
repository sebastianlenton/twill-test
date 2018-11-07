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

    public function afterSave($object, $fields) {
        $this->updateBrowser($object, $fields, 'projecttags');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object) {
        $fields = parent::getFormFields($object);
        $fields['browsers']['projecttags'] = $this->getFormFieldsForBrowser($object, 'projecttags');
        return $fields;
    }
}
