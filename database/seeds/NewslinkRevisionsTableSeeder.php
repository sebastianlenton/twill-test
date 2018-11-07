<?php

use Illuminate\Database\Seeder;

class NewslinkRevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('newslink_revisions')->delete();
        
        \DB::table('newslink_revisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-06 17:33:02',
                'updated_at' => '2018-11-06 17:33:02',
                'payload' => '{"slug": {"en": "fast-company"}, "title": "Fast Company", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'newslink_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-11-06 17:43:56',
                'updated_at' => '2018-11-06 17:43:56',
                'payload' => '{"URL": "https://www.fastcompany.com/90126734/order-the-new-design-office-that-spun-off-a-1-9m-kickstarter-business", "slug": null, "title": "Fast Company", "blocks": [], "medias": [], "public": false, "source": "Fast Company", "browsers": [], "headline": "Office Opening cover story for Fast Company", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update-new", "publish_end_date": null, "publish_start_date": null}',
                'newslink_id' => 1,
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-11-06 17:44:12',
                'updated_at' => '2018-11-06 17:44:12',
                'payload' => '{"slug": {"en": "aiga-hamish-interview"}, "title": "AIGA Hamish Interview", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'newslink_id' => 2,
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-11-06 17:45:25',
                'updated_at' => '2018-11-06 17:45:25',
                'payload' => '{"URL": "https://eyeondesign.aiga.org/designer-publisher-hamish-smyth-reveals-his-favorite-piece-of-personal-work-what-he-learned-from-michael-bierut/", "slug": null, "title": "AIGA Hamish Interview", "blocks": [], "medias": [], "public": false, "source": "AIGA Eye On Design", "browsers": [], "headline": "Interview with founder and partner Hamish Smyth", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "publish_end_date": null, "publish_start_date": null}',
                'newslink_id' => 2,
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2018-11-06 17:48:46',
                'updated_at' => '2018-11-06 17:48:46',
                'payload' => '{"URL": "https://eyeondesign.aiga.org/designer-publisher-hamish-smyth-reveals-his-favorite-piece-of-personal-work-what-he-learned-from-michael-bierut/", "slug": null, "title": "AIGA Hamish Interview", "blocks": [], "medias": [], "public": false, "source": "AIGA Eye On Design", "browsers": [], "headline": "Interview with founder and partner Hamish Smyth", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update-new", "publish_end_date": null, "publish_start_date": null}',
                'newslink_id' => 2,
                'user_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2018-11-06 17:49:05',
                'updated_at' => '2018-11-06 17:49:05',
                'payload' => '{"slug": {"en": "brand-new-kickstarter"}, "title": "Brand New Kickstarter", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'newslink_id' => 3,
                'user_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2018-11-06 17:53:50',
                'updated_at' => '2018-11-06 17:53:50',
                'payload' => '{"URL": "https://www.underconsideration.com/brandnew/archives/new_logo_and_identity_for_kickstarter_done_in_house_in_collaboration_with_order.php", "slug": null, "title": "Brand New Kickstarter", "blocks": [], "medias": [], "public": false, "source": "Brand New", "browsers": [], "headline": "Understanding the process of the Kickstarter Rebrand", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "publish_end_date": null, "publish_start_date": null}',
                'newslink_id' => 3,
                'user_id' => 1,
            ),
        ));
        
        
    }
}