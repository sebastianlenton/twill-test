<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Homepage;

//use carbon\Carbon;

class HomepageController extends Controller
{
    public function __construct() {

    }

    public function index() {
        //there should only ever be one of these
        $homepage = Homepage::latest()->get();

        return view( 'site.homepage', [ 'item' => $homepage ] );
    }
    
}

?>