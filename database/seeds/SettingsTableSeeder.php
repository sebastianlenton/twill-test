<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-10-29 22:27:19',
                'updated_at' => '2018-10-29 22:27:19',
                'deleted_at' => NULL,
                'key' => 'site_title',
                'section' => 'form',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-10-31 10:13:08',
                'updated_at' => '2018-10-31 10:13:08',
                'deleted_at' => NULL,
                'key' => 'email_address',
                'section' => 'form',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-10-31 10:28:19',
                'updated_at' => '2018-10-31 10:28:19',
                'deleted_at' => NULL,
                'key' => 'company_name',
                'section' => 'form',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'deleted_at' => NULL,
                'key' => 'twitter_handle',
                'section' => 'form',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'deleted_at' => NULL,
                'key' => 'telephone',
                'section' => 'form',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'deleted_at' => NULL,
                'key' => 'office_address',
                'section' => 'form',
            ),
        ));
        
        
    }
}