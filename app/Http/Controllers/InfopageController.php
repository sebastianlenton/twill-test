<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Infopage;

//use carbon\Carbon;

class InfopageController extends Controller
{
    public function __construct() {

    }

    public function index() {
        //there should only ever be one of these
        $page = Infopage::latest()->get();

        return view( 'site.info', [ 'item' => $page ] );
    }
    
}

?>