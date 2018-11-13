<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Indexpage;

class IndexpageRepository extends ModuleRepository
{
    

    public function __construct(Indexpage $model)
    {
        $this->model = $model;
    }
}
