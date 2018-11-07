<?php

use Illuminate\Database\Seeder;

class NewslinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newslinks')->delete();
        
        \DB::table('newslinks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:33:02',
                'updated_at' => '2018-11-06 17:43:56',
                'published' => 1,
                'title' => 'Fast Company',
                'headline' => 'Office Opening cover story for Fast Company',
                'source' => 'Fast Company',
                'url' => 'https://www.fastcompany.com/90126734/order-the-new-design-office-that-spun-off-a-1-9m-kickstarter-business',
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:44:12',
                'updated_at' => '2018-11-06 17:48:46',
                'published' => 1,
                'title' => 'AIGA Hamish Interview',
                'headline' => 'Interview with founder and partner Hamish Smyth',
                'source' => 'AIGA Eye On Design',
                'url' => 'https://eyeondesign.aiga.org/designer-publisher-hamish-smyth-reveals-his-favorite-piece-of-personal-work-what-he-learned-from-michael-bierut/',
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 17:49:05',
                'updated_at' => '2018-11-06 17:53:50',
                'published' => 1,
                'title' => 'Brand New Kickstarter',
                'headline' => 'Understanding the process of the Kickstarter Rebrand',
                'source' => 'Brand New',
                'url' => 'https://www.underconsideration.com/brandnew/archives/new_logo_and_identity_for_kickstarter_done_in_house_in_collaboration_with_order.php',
            ),
        ));
        
        
    }
}