<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Designpage;
use App\Models\Project;

class DesignpageController extends Controller
{
    public function __construct() {

    }

    public function index() {

        //there should only ever be one of these
        $homepage = Designpage::latest()->get();

        return view( 'site.designpage', [
            'item' => $homepage,
        ] );

    }
    
}

?>