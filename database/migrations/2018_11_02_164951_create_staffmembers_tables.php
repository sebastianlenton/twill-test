<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffmembersTables extends Migration
{
    public function up()
    {
        Schema::create('staffmembers', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // feel free to modify the name of this column, but title is supported by default (you would need to specify the name of the column Twill should consider as your "title" column in your module controller if you change it)
            $table->string('title', 200)->nullable();
            //$table->string('first_name', 200)->nullable();
            //$table->string('last_name', 200)->nullable();
            $table->string('company_role', 200)->nullable();
            
            $table->text('bio')->nullable();

            // add those 2 colums to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();


            // use this column with the HasPosition trait
            // $table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        /*Schema::create('staffmember_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'staffmember');
            // add some translated fields
            // $table->string('title', 200)->nullable();
            // $table->text('description')->nullable();
        });*/

        // remove this if you're not going to use slugs, ie. using the HasSlug trait
        /*Schema::create('staffmember_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'staffmember');
        });*/

        // remove this if you're not going to use revisions, ie. using the HasRevisions trait
        Schema::create('staffmember_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'staffmember');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffmember_revisions');
        Schema::dropIfExists('staffmember_translations');
        Schema::dropIfExists('staffmember_slugs');
        Schema::dropIfExists('staffmembers');
    }
}
