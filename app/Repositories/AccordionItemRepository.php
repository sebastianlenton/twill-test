<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\AccordionItem;

class AccordionItemRepository extends ModuleRepository
{
    

    public function __construct(AccordionItem $model)
    {
        $this->model = $model;
    }
}
