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
            
            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            //$table->text('description')->nullable();

            //$table->text('video_url')->nullable();

            //$table->boolean('documented')->default(0);

            // use this column with the HasPosition trait
            //$table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        /*Schema::create('project_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'project');
            // add some translated fields
            // $table->string('title', 200)->nullable();
            // $table->text('description')->nullable();
        });*/

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
        Schema::dropIfExists('projects');
    }
}
