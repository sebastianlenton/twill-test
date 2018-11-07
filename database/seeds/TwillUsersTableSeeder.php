<?php

use Illuminate\Database\Seeder;

class TwillUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('twill_users')->delete();
        
        \DB::table('twill_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-10-24 16:47:40',
                'updated_at' => '2018-10-24 16:47:40',
                'published' => 1,
                'name' => 'Admin',
                'email' => 'sebastian.lenton@gmail.com',
                'password' => '$2y$10$/dMNJf8vnssLstbgcBdpieoWTYyxxXdg8pzbqBiY9mLj2LFvNwrm.',
                'role' => 'SUPERADMIN',
                'title' => NULL,
                'description' => NULL,
                'remember_token' => 'EQaoQQAYa5B3WfnwXyTX40YnWgy5WxSdlEWT5B5l7TOKiGrzBuJ3tm8uZftZ',
            ),
        ));
        
        
    }
}