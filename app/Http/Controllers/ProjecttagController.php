<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Project;
use App\Models\Projecttag;
use App\Models\Indexpage;

class ProjecttagController extends Controller
{
    public function __construct() {

    }


    //this is for an individual tag
    public function show( $projecttagSlug ) {

        //get the project tag record by slug
        $projecttag = $this->getProjecttagBySlug( $projecttagSlug );

        $projects = $this->getProjectsByTagID($projecttag->id);

        //get the projects associated with the tag

        //return view( 'site.project', [ 'item' => $project ] );
        return view( 'site.tagListing', [
            'item' => $projecttag,
            'projects' => $projects
        ] );

    }


    /**
     * Get a projecttag by slug
     * @param  string $projectSlug the slug of the projecttag to be returned
     * @return Projecttag $projecttag
     */
    function getProjecttagBySlug( $projecttagSlug ) {

        $projecttagID = DB::table('projecttag_slugs')->where('slug', $projecttagSlug)->where('active', 1)->value('projecttag_id');

        //find the tag objects
        $projecttag = Projecttag::find($projecttagID);

        return $projecttag;

    }


    /**
     * Get a project by tag ID - there must be better ways of doing this...
     * @param  int $projecttagID the id of the projecttag
     * @return Project collection $projects
     */
    function getProjectsByTagID( $projecttagID ) {

        //first, get the IDs from the project_projecttags table...
        $projectIDs = DB::table('project_projecttag')->select('project_id')->where('projecttag_id', $projecttagID)->get();

        if( !empty($projectIDs) ) {

            $projects = [];
            
            foreach($projectIDs as $projectID) {

                $currentProj = Project::find($projectID->project_id);

                if(!empty($currentProj)) {
                    $projects[] = $currentProj;    
                }

            }
        }

        return $projects;

    }
}

?>