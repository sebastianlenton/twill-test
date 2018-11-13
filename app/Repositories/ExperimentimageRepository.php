<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Experimentimage;

class ExperimentimageRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Experimentimage $model)
    {
        $this->model = $model;
    }
}
