<?php

use Illuminate\Database\Seeder;

class InfopagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infopages')->delete();
        
        \DB::table('infopages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 15:45:49',
                'updated_at' => '2018-11-06 15:47:00',
                'published' => 1,
                'title' => 'Info page',
                'intro' => '<p>This is the agency introduction text.</p>',
                'capabilities' => '<p>This is the agency capabilities text.</p>',
                'intro_sm' => '<p>This is the Standards Manual intro text.</p>',
            ),
        ));
        
        
    }
}