<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsitemsTables extends Migration
{
    public function up()
    {
        Schema::create('newsitems', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();

            $table->dateTime('published_date')->nullable();

            //TODO what happens if I skip the length param?
            $table->string('content')->nullable();
        });

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('newsitem_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'newsitem');
        });
    }

    public function down()
    {
        Schema::dropIfExists('newsitem_revisions');
        Schema::dropIfExists('newsitem_translations');
        Schema::dropIfExists('newsitem_slugs');
        Schema::dropIfExists('newsitems');
    }
}
