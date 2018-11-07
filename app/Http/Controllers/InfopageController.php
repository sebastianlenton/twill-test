<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Infopage;
use App\Models\Staffmember;
use App\Models\Newslink;
use App\Models\Job;

//use carbon\Carbon;

class InfopageController extends Controller
{
    public function __construct() {

    }

    public function index() {
        //there should only ever be one of these
        $page = Infopage::oldest()->get();
        $staffmembers = Staffmember::oldest()->get();
        $newslinks = Newslink::oldest()->get();
        $jobs = Job::oldest()->get();

        return view( 'site.infopage', [
            'item' => $page,
            'staffmembers' => $staffmembers,
            'newslinks' => $newslinks,
            'jobs' => $jobs
        ] );
    }
    
}

?>