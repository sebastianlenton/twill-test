<?php

use Illuminate\Database\Seeder;

class DesignpagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('designpages')->delete();
        
        \DB::table('designpages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-11-07 13:45:36',
                'updated_at' => '2018-11-07 13:45:36',
                'published' => 1,
                'title' => 'Design',
                'description' => NULL,
            ),
        ));
        
        
    }
}