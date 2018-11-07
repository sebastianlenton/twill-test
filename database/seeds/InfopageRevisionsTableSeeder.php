<?php

use Illuminate\Database\Seeder;

class InfopageRevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infopage_revisions')->delete();
        
        \DB::table('infopage_revisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2018-11-06 15:45:49',
                'updated_at' => '2018-11-06 15:45:49',
                'payload' => '{"slug": {"en": "info-page"}, "title": "Info page", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "published": true}',
                'infopage_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2018-11-06 15:47:00',
                'updated_at' => '2018-11-06 15:47:00',
                'payload' => '{"slug": null, "intro": "<p>This is the agency introduction text.</p>", "title": "Info page", "blocks": [], "medias": {"sm_image": [{"id": 3, "name": "JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg", "tags": [], "crops": {"default": {"x": 0, "y": 103, "name": "3:2", "width": 811, "height": 540}}, "width": 811, "height": 662, "medium": "https://order-site-images-dev.imgix.net/83db6e80-394a-43bf-85b7-42a3d1994b0d/JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/83db6e80-394a-43bf-85b7-42a3d1994b0d/JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg", "deleteUrl": null, "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Jcfo Underline 10 University Bridge Proposed E1447786631859 Cropped 2", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/83db6e80-394a-43bf-85b7-42a3d1994b0d/JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}], "main_image": [{"id": 2, "name": "dog.jpg", "tags": [], "crops": {"default": {"x": 0, "y": 0, "name": "3:2", "width": 474, "height": 317}}, "width": 474, "height": 474, "medium": "https://order-site-images-dev.imgix.net/35ce91a2-b805-4b20-8aaf-bc2109caab6a/dog.jpg?auto=compress%2Cformat&fit=min&fm=jpg&h=430&q=80", "original": "https://order-site-images-dev.imgix.net/35ce91a2-b805-4b20-8aaf-bc2109caab6a/dog.jpg", "deleteUrl": null, "metadatas": {"custom": {"video": null, "altText": null, "caption": null}, "default": {"video": null, "altText": "Dog", "caption": null}}, "thumbnail": "https://order-site-images-dev.imgix.net/35ce91a2-b805-4b20-8aaf-bc2109caab6a/dog.jpg?auto=compress%2Cformat&dpr=1&fit=min&fm=jpg&h=256&q=60", "updateUrl": "http://admin.order.localhost:8000/media-library/medias/single-update", "deleteBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-delete", "updateBulkUrl": "http://admin.order.localhost:8000/media-library/medias/bulk-update"}]}, "public": false, "browsers": [], "intro_sm": "<p>This is the Standards Manual intro text.</p>", "languages": [{"label": "English", "value": "en", "disabled": false, "published": true, "shortlabel": "EN"}], "parent_id": 0, "published": 1, "repeaters": [], "cmsSaveType": "update", "capabilities": "<p>This is the agency capabilities text.</p>", "publish_end_date": null, "publish_start_date": null}',
                'infopage_id' => 1,
                'user_id' => 1,
            ),
        ));
        
        
    }
}