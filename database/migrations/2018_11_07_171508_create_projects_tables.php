<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTables extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            $table->text('video_url')->nullable();

            $table->boolean('undocumented')->default(0);

            $table->dateTime('publication_date')->nullable();



            //need to check if the below works:
            //$table->dateTime('publication_date')->default(DB::raw('CURRENT_TIMESTAMP'));

            //yes it did, but the Publication date field doesn't get got until it's been saved once, even though the formats look fine in the db- how/why?



            $table->text('project_page_description')->nullable();

            $table->text('project_page_collaborators')->nullable();
            
            
            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            //$table->text('description')->nullable();

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            $table->integer('position')->unsigned()->nullable();

            $table->string('seo_meta_description', 160)->nullable();
            
        });

        //create a table that will store the projecttag browser field relationship
        //see https://github.com/area17/twill/issues/45
        //https://bitbucket.org/wratke/twill_test/src
        Schema::create('project_projecttag', function (Blueprint $table) {
            createDefaultRelationshipTableFields($table, 'project', 'projecttag');
            $table->integer('position')->unsigned()->index();
        });

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        Schema::create('project_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'project');
        });

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('project_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'project');
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_revisions');
        Schema::dropIfExists('project_translations');
        Schema::dropIfExists('project_slugs');

        //drop the associated projecttag table
        Schema::dropIfExists('project_projecttag');

        Schema::dropIfExists('projects');

    }
}
