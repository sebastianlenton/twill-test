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

        $project = $this->getProjectTags( $project );

        return view( 'site.project', [ 'item' => $project ] );

    }

    
    /**
     * On the Listing page, go through the projects array and get the slug for each one
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


    /**
     * Get the tags for a project and add them to the project object
     * @param  object $project
     * @return object $project
     */
    function getProjectTags( $project ) {

        //first get the IDs of the project tags from the pivot table
        $tagIDs = DB::table('project_projecttag')->where('project_id', $project->id)->pluck('projecttag_id');

        if( count( $tagIDs ) > 0 ) {

            $tagData = [];      //array to store tag name and slug

            //now assign the tag IDs to their data (title and slug):
            foreach( $tagIDs as $tagID ) {

                //get the title
                $tagTitle = DB::table('projecttags')->where('id', $tagID)->where('published', 1)->value( 'title' );

                //if the title is not emtpy (hence the tag is draft)get the slug and add to array to be added to object
                if( !empty($tagTitle) ) {

                    $tagSlug = DB::table('projecttag_slugs')->where('projecttag_id', $tagID)->value( 'slug' );

                    if( !empty($tagSlug) ) {
                        $thisTagData['tagName'] = $tagTitle;
                        $thisTagData['tagSlug'] = $tagSlug;
                        array_push( $tagData, $thisTagData );
                    }
                    
                }

            }

            $project->tagData = $tagData;

        }

        return $project;

    }

}

?>