<?php

use Illuminate\Database\Seeder;

class JobRevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('job_revisions')->delete();
        
        \DB::table('job_revisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-06 18:06:46',
                'updated_at' => '2018-11-06 18:06:46',
                'payload' => '{"slug": {"en": "junior-designer"}, "title": "Junior Designer", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'job_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-11-06 18:07:38',
                'updated_at' => '2018-11-06 18:07:38',
                'payload' => '{"slug": {"en": null}, "title": "Design Intern", "blocks": [], "medias": [], "public": false, "browsers": [], "subtitle": "Summer 2018", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "description": null, "publish_end_date": null, "publish_start_date": null}',
                'job_id' => 1,
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-11-06 18:09:01',
                'updated_at' => '2018-11-06 18:09:01',
                'payload' => '{"slug": null, "title": "Design Intern", "blocks": [], "medias": [], "public": false, "browsers": [], "subtitle": "Summer 2018", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "description": "<p>We are currently looking for a design intern for the summer 2018. Must currently be enrolled in or a recent graduate holding a degree of graphic design.</p>", "publish_end_date": null, "publish_start_date": null}',
                'job_id' => 1,
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-11-06 18:09:09',
                'updated_at' => '2018-11-06 18:09:09',
                'payload' => '{"slug": null, "title": "Design Intern", "blocks": [], "medias": [], "public": false, "browsers": [], "subtitle": "Summer 2018", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update-new", "description": "<p>We are currently looking for a design intern for the summer 2018. Must currently be enrolled in or a recent graduate holding a degree of graphic design.</p>", "publish_end_date": null, "publish_start_date": null}',
                'job_id' => 1,
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2018-11-06 18:09:28',
                'updated_at' => '2018-11-06 18:09:28',
                'payload' => '{"slug": {"en": "developer"}, "title": "Developer", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'job_id' => 2,
                'user_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2018-11-06 18:10:07',
                'updated_at' => '2018-11-06 18:10:07',
            'payload' => '{"slug": null, "title": "Developer", "blocks": [], "medias": [], "public": false, "browsers": [], "subtitle": "(remote)", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update-new", "description": "<p>We are currently looking for a developer to work remotely. This position is remote only; does not need to be based in New York City.</p>", "publish_end_date": null, "publish_start_date": null}',
                'job_id' => 2,
                'user_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2018-11-06 18:10:21',
                'updated_at' => '2018-11-06 18:10:21',
                'payload' => '{"slug": {"en": "another-job"}, "title": "Another Job", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'job_id' => 3,
                'user_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2018-11-06 18:11:05',
                'updated_at' => '2018-11-06 18:11:05',
            'payload' => '{"slug": null, "title": "Another Job", "blocks": [], "medias": [], "public": false, "browsers": [], "subtitle": "(example)", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "description": "<p>This is a placeholder job position. &nbsp;Ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus magna at finibus varius. Pellentesque eget tempus ipsum, in congue odio. Sed a ex nisl. In tristique.</p>", "publish_end_date": null, "publish_start_date": null}',
                'job_id' => 3,
                'user_id' => 1,
            ),
        ));
        
        
    }
}