<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

//this is an attempt to store contents of repeaters in contentFields
class CreateAccordionItemTables extends Migration
{
    public function up()
    {
        Schema::create('accordion_item', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            //Fixed accordion_item table migration (replace title by header)
            $table->string('header', 200)->nullable();
            
            // your generated model and form include a description field, to get you started, but feel free to get rid of it if you don't need it
            $table->text('description')->nullable();

            //this is an attempt to store contents of repeaters in contentFields
            $table->json('content')->nullable();

            //add foreign key
            //$table->integer('project_id')->unsigned();
            //$table->index('project_id');
            //$table->foreign('project_id')->references('id')->on('projects');

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        /*Schema::create('accordion_item_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'accordion_item');
            // add some translated fields
            // $table->string('title', 200)->nullable();
            // $table->text('description')->nullable();
        });*/

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        /*Schema::create('accordion_item_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'accordion_item');
        });*/

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        /*Schema::create('accordion_item_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'accordion_item');
        });*/
    }

    public function down()
    {
        Schema::dropIfExists('accordion_item_revisions');
        Schema::dropIfExists('accordion_item_translations');
        Schema::dropIfExists('accordion_item_slugs');
        Schema::dropIfExists('accordion_item');
    }
}
