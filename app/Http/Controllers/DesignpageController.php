<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Homepage;

//use carbon\Carbon;

class DesignpageController extends Controller
{
    public function __construct() {

    }

    public function index() {
        //there should only ever be one of these
        $homepage = Designpage::latest()->get();

        return view( 'site.desgnpage', [ 'item' => $homepage ] );
    }
    
}

?>