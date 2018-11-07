<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Project;

class ProjectListingController extends Controller
{
    public function __construct() {

    }


    //this is for the project listing
    public function index() {

        $projects = Project::latest()->get();

        $projects = $this->injectProjectSlugs($projects);

        return view( 'site.projectListing', [ 'projects' => $projects ] );
    }


    //this is for an individual project
    public function show( $projectSlug ) {

        $project = $this->getProjectBySlug( $projectSlug );

        return view( 'site.project', [ 'item' => $project ] );

    }

    
    /**
     * Go through the projects array and get the slug for each one
     * @param  object $projects an array of projects
     * @return object $projectsProcessed array of projects with slugs
     */
    function injectProjectSlugs( $projects ) {

        foreach( $projects as $project ) {

            $projectID = $project->id;

            //TODO need some error checking here- in case there's no permalink?
            $projectPermalink = DB::table('project_slugs')->where('active', 1)->where('project_id', $projectID)->value('slug');

            $project['projectPermalink'] = $projectPermalink;

        }

        return $projects;

    }


    /**
     * Get a project by slug
     * @param  string $projectSlug the slug of the project to be returned
     * @return Project $project
     */
    function getProjectBySlug( $projectSlug ) {

        $projectID = DB::table('project_slugs')->where('slug', $projectSlug)->where('active', 1)->value('project_id');

        $project = Project::find($projectID);

        return $project;
    }


}

?>