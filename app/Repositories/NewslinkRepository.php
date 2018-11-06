<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Newslink;

class NewslinkRepository extends ModuleRepository
{
    use HandleRevisions;

    public function __construct(Newslink $model)
    {
        $this->model = $model;
    }
}
