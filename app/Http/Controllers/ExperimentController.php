<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Experiment;

class ExperimentController extends Controller
{
    public function __construct() {

    }

    //temp listing. TODO proper crazy JS stuff to make this work!
    public function index() {

        //$projects = Experiment::where( 'published', 1 )->orderByRaw('ISNULL(publication_date), publication_date DESC')->get();
        $experiments = Experiment::where( 'published', 1 )->get();

        //var_dump( $experiments );

        //die('dead');

        return view( 'site.experimentListing', [ 'items' => $experiments ] );

    }
}

?>