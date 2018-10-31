<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Models\Homepage;
use Session;

class HomepageController extends ModuleController
{
    protected $moduleName = 'homepages';

    public function homepage()
    {
        // find the page by type or anything you've decided to use to differentiate them
        abort_unless($page = Homepage::first(), 500, 'Homepage missing');
        
        // this is so that Twill always goes back to that form's route directly, not pages listing
        Session::put("homepages_back_link", route('admin.homepage'));
        
        // with this approach you can provide your own view for each page
        return view('admin.homepages.form',  $this->form($page->id));
    }
}
