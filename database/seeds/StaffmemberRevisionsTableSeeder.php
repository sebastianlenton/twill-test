<?php

use Illuminate\Database\Seeder;

class StaffmemberRevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staffmember_revisions')->delete();
        
        \DB::table('staffmember_revisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-06 16:53:37',
                'updated_at' => '2018-11-06 16:53:37',
                'payload' => '{"slug": {"en": "hamish-smyth"}, "title": "Hamish Smyth", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'staffmember_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-11-06 16:56:28',
                'updated_at' => '2018-11-06 16:56:28',
                'payload' => '{"bio": "Hamish bio goes here. Lorem ipsum dolor etc.", "slug": null, "title": "Hamish Smyth", "blocks": [], "medias": {"image": [{"id": 10, "name": "SMYTH.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": "689", "height": "688", "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/10", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Smyth", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Smyth", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Hamish", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 1,
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2018-11-06 16:56:40',
                'updated_at' => '2018-11-06 16:56:40',
                'payload' => '{"bio": "Hamish bio goes here. Lorem ipsum dolor etc.", "slug": null, "title": "Hamish Smyth", "blocks": [], "medias": {"image": [{"id": 10, "name": "SMYTH.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Smyth", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Smyth", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Hamish", "cmsSaveType": "update-new", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 1,
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2018-11-06 16:58:09',
                'updated_at' => '2018-11-06 16:58:09',
                'payload' => '{"slug": {"en": "jesse-reed"}, "title": "Jesse Reed", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'staffmember_id' => 2,
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2018-11-06 16:58:45',
                'updated_at' => '2018-11-06 16:58:45',
                'payload' => '{"bio": "Jesse bio lorem ipsum dolor.", "slug": null, "title": "Jesse Reed", "blocks": [], "medias": {"image": [{"id": 8, "name": "REED.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/8", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Reed", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Reed", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Jesse", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 2,
                'user_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2018-11-06 17:02:23',
                'updated_at' => '2018-11-06 17:02:23',
                'payload' => '{"bio": "Jesse bio lorem ipsum dolor.", "slug": null, "title": "Jesse Reed", "blocks": [], "medias": {"image": [{"id": 8, "name": "REED.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/8", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Reed", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Reed", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Jesse", "cmsSaveType": "update-new", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 2,
                'user_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2018-11-06 17:02:35',
                'updated_at' => '2018-11-06 17:02:35',
                'payload' => '{"slug": {"en": "nicholas-stover"}, "title": "Nicholas Stover", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'staffmember_id' => 3,
                'user_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2018-11-06 17:03:22',
                'updated_at' => '2018-11-06 17:03:22',
                'payload' => '{"bio": "Nick bio lorem ipsum", "slug": null, "title": "Nicholas Stover", "blocks": [], "medias": {"image": [{"id": 9, "name": "STOVER.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/9", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Stover", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Stover", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Nicholas", "cmsSaveType": "update-new", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 3,
                'user_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2018-11-06 17:03:55',
                'updated_at' => '2018-11-06 17:03:55',
                'payload' => '{"slug": {"en": "jessica-adams"}, "title": "Jessica Adams", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'staffmember_id' => 4,
                'user_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2018-11-06 17:04:29',
                'updated_at' => '2018-11-06 17:04:29',
                'payload' => '{"bio": "Jessica bio lorem ipsum", "slug": null, "title": "Jessica Adams", "blocks": [], "medias": {"image": [{"id": 7, "name": "ADAMS.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/7", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Adams", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Adams", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Jessica", "cmsSaveType": "update-new", "company_role": "Designer1", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 4,
                'user_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2018-11-06 17:04:42',
                'updated_at' => '2018-11-06 17:04:42',
                'payload' => '{"slug": {"en": "sam-bumbalo"}, "title": "Sam Bumbalo", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'staffmember_id' => 5,
                'user_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2018-11-06 17:05:12',
                'updated_at' => '2018-11-06 17:05:12',
                'payload' => '{"bio": "Sam bio lorem ipsum", "slug": null, "title": "Sam Bumbalo", "blocks": [], "medias": {"image": [{"id": 6, "name": "BUMBALO.png", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png", "deleteUrl": "http://admin.order.localhost:8000/media-library/medias/6", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Bumbalo", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Bumbalo", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Sam", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 5,
                'user_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2018-11-06 17:24:10',
                'updated_at' => '2018-11-06 17:24:10',
                'payload' => '{"bio": "Sam bio lorem ipsum", "slug": null, "title": "Sam Bumbalo", "blocks": [], "medias": {"image": [{"id": 6, "name": "BUMBALO.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Bumbalo", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Bumbalo", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Sam", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 5,
                'user_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => '2018-11-06 17:24:56',
                'updated_at' => '2018-11-06 17:24:56',
                'payload' => '{"bio": "<p>Sam bio lorem ipsum dolor et.</p>", "slug": null, "title": "Sam Bumbalo", "blocks": [], "medias": {"image": [{"id": 6, "name": "BUMBALO.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Bumbalo", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Bumbalo", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Sam", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 5,
                'user_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => '2018-11-06 17:25:52',
                'updated_at' => '2018-11-06 17:25:52',
                'payload' => '{"bio": "<p>Jessica bio lorem ipsum dolor.</p>", "slug": null, "title": "Jessica Adams", "blocks": [], "medias": {"image": [{"id": 7, "name": "ADAMS.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Adams", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Adams", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Jessica", "cmsSaveType": "update", "company_role": "Designer1", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 4,
                'user_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => '2018-11-06 17:26:00',
                'updated_at' => '2018-11-06 17:26:00',
                'payload' => '{"bio": "<p>Nick bio lorem ipsum dolor et.</p>", "slug": null, "title": "Nicholas Stover", "blocks": [], "medias": {"image": [{"id": 9, "name": "STOVER.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Stover", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Stover", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Nicholas", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 3,
                'user_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => '2018-11-06 17:26:04',
                'updated_at' => '2018-11-06 17:26:04',
                'payload' => '{"bio": "<p>Jesse bio lorem ipsum dolor et.</p>", "slug": null, "title": "Jesse Reed", "blocks": [], "medias": {"image": [{"id": 8, "name": "REED.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Reed", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/REED.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Reed", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Jesse", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 2,
                'user_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => '2018-11-06 17:26:09',
                'updated_at' => '2018-11-06 17:26:09',
                'payload' => '{"bio": "<p>Hamish bio goes here. Lorem ipsum dolor et.</p>", "slug": null, "title": "Hamish Smyth", "blocks": [], "medias": {"image": [{"id": 10, "name": "SMYTH.png", "crops": {"default": {"x": 0, "y": 0, "name": "square", "width": 689, "height": 688}}, "width": 689, "height": 688, "medium": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png", "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Smyth", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60"}]}, "public": false, "browsers": [], "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "last_name": "Smyth", "parent_id": 0, "published": 1, "repeaters": [], "first_name": "Hamish", "cmsSaveType": "update", "company_role": "Designer", "publish_end_date": null, "publish_start_date": null}',
                'staffmember_id' => 1,
                'user_id' => 1,
            ),
        ));
        
        
    }
}