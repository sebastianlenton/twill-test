<?php

use Illuminate\Database\Seeder;

class DesignpageRevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designpage_revisions')->delete();
        
        \DB::table('designpage_revisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-07 13:45:36',
                'updated_at' => '2018-11-07 13:45:36',
                'payload' => '{"slug": {"en": "design"}, "title": "Design", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'designpage_id' => 1,
                'user_id' => 1,
            ),
        ));
        
        
    }
}