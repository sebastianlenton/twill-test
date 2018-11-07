<?php

use Illuminate\Database\Seeder;

class StaffmembersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staffmembers')->delete();
        
        \DB::table('staffmembers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 16:53:37',
                'updated_at' => '2018-11-06 17:26:09',
                'published' => 1,
                'title' => 'Hamish Smyth',
                'first_name' => 'Hamish',
                'last_name' => 'Smyth',
                'company_role' => 'Designer',
                'bio' => '<p>Hamish bio goes here. Lorem ipsum dolor et.</p>',
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 16:58:09',
                'updated_at' => '2018-11-06 17:26:04',
                'published' => 1,
                'title' => 'Jesse Reed',
                'first_name' => 'Jesse',
                'last_name' => 'Reed',
                'company_role' => 'Designer',
                'bio' => '<p>Jesse bio lorem ipsum dolor et.</p>',
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:02:35',
                'updated_at' => '2018-11-06 17:26:00',
                'published' => 1,
                'title' => 'Nicholas Stover',
                'first_name' => 'Nicholas',
                'last_name' => 'Stover',
                'company_role' => 'Designer',
                'bio' => '<p>Nick bio lorem ipsum dolor et.</p>',
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:03:55',
                'updated_at' => '2018-11-06 17:25:52',
                'published' => 1,
                'title' => 'Jessica Adams',
                'first_name' => 'Jessica',
                'last_name' => 'Adams',
                'company_role' => 'Designer1',
                'bio' => '<p>Jessica bio lorem ipsum dolor.</p>',
            ),
            4 => 
            array (
                'id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:04:42',
                'updated_at' => '2018-11-06 17:24:56',
                'published' => 1,
                'title' => 'Sam Bumbalo',
                'first_name' => 'Sam',
                'last_name' => 'Bumbalo',
                'company_role' => 'Designer',
                'bio' => '<p>Sam bio lorem ipsum dolor et.</p>',
            ),
        ));
        
        
    }
}