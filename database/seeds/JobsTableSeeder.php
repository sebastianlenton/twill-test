<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 18:06:46',
                'updated_at' => '2018-11-06 18:09:09',
                'published' => 1,
                'title' => 'Design Intern',
                'subtitle' => 'Summer 2018',
                'description' => '<p>We are currently looking for a design intern for the summer 2018. Must currently be enrolled in or a recent graduate holding a degree of graphic design.</p>',
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 18:09:28',
                'updated_at' => '2018-11-06 18:10:07',
                'published' => 1,
                'title' => 'Developer',
            'subtitle' => '(remote)',
                'description' => '<p>We are currently looking for a developer to work remotely. This position is remote only; does not need to be based in New York City.</p>',
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 18:10:21',
                'updated_at' => '2018-11-06 18:11:05',
                'published' => 1,
                'title' => 'Another Job',
            'subtitle' => '(example)',
                'description' => '<p>This is a placeholder job position. &nbsp;Ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus magna at finibus varius. Pellentesque eget tempus ipsum, in congue odio. Sed a ex nisl. In tristique.</p>',
            ),
        ));
        
        
    }
}