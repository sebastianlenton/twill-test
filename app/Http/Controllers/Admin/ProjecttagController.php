<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class ProjecttagController extends ModuleController
{
    protected $moduleName = 'projecttags';

    protected $indexOptions = [
        'editInModal' => true
    ];
}