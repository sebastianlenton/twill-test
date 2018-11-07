<?php

use Illuminate\Database\Seeder;

class MediasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medias')->delete();
        
        \DB::table('medias')->insert(array (
            0 => 
            array (
                'id' => 2,
                'created_at' => '2018-10-30 11:28:24',
                'updated_at' => '2018-10-30 11:28:24',
                'deleted_at' => NULL,
                'uuid' => '35ce91a2-b805-4b20-8aaf-bc2109caab6a/dog.jpg',
                'alt_text' => 'Dog',
                'width' => 474,
                'height' => 474,
                'caption' => NULL,
                'filename' => 'dog.jpg',
            ),
            1 => 
            array (
                'id' => 3,
                'created_at' => '2018-10-30 11:46:17',
                'updated_at' => '2018-10-30 11:46:17',
                'deleted_at' => NULL,
                'uuid' => '83db6e80-394a-43bf-85b7-42a3d1994b0d/JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg',
                'alt_text' => 'Jcfo Underline 10 University Bridge Proposed E1447786631859 Cropped 2',
                'width' => 811,
                'height' => 662,
                'caption' => NULL,
                'filename' => 'JCFO_UNDERLINE_10-UNIVERSITY-BRIDGE_PROPOSED-e1447786631859-cropped-2.jpg',
            ),
            2 => 
            array (
                'id' => 4,
                'created_at' => '2018-10-30 11:54:14',
                'updated_at' => '2018-10-30 11:54:14',
                'deleted_at' => NULL,
                'uuid' => '0543d5ae-a3ea-47f7-989e-67abec959bf4/TheUnderline_Website_v21-4.jpg',
                'alt_text' => 'Theunderline Website V21 4',
                'width' => 1400,
                'height' => 771,
                'caption' => NULL,
                'filename' => 'TheUnderline_Website_v21-4.jpg',
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => '2018-10-31 16:53:21',
                'updated_at' => '2018-10-31 16:53:21',
                'deleted_at' => NULL,
                'uuid' => '971ef4c8-1c08-4aac-9dfe-c5d6c63a56df/angkor_wat_cambodia.jpg',
                'alt_text' => 'Angkor Wat Cambodia',
                'width' => 1600,
                'height' => 1200,
                'caption' => NULL,
                'filename' => 'angkor_wat_cambodia.jpg',
            ),
            4 => 
            array (
                'id' => 6,
                'created_at' => '2018-11-06 16:56:10',
                'updated_at' => '2018-11-06 16:56:10',
                'deleted_at' => NULL,
                'uuid' => '61673188-a6a1-48dd-892f-a12b9c090467/BUMBALO.png',
                'alt_text' => 'Bumbalo',
                'width' => 689,
                'height' => 688,
                'caption' => NULL,
                'filename' => 'BUMBALO.png',
            ),
            5 => 
            array (
                'id' => 7,
                'created_at' => '2018-11-06 16:56:10',
                'updated_at' => '2018-11-06 16:56:10',
                'deleted_at' => NULL,
                'uuid' => '61673188-a6a1-48dd-892f-a12b9c090467/ADAMS.png',
                'alt_text' => 'Adams',
                'width' => 689,
                'height' => 688,
                'caption' => NULL,
                'filename' => 'ADAMS.png',
            ),
            6 => 
            array (
                'id' => 8,
                'created_at' => '2018-11-06 16:56:11',
                'updated_at' => '2018-11-06 16:56:11',
                'deleted_at' => NULL,
                'uuid' => '61673188-a6a1-48dd-892f-a12b9c090467/REED.png',
                'alt_text' => 'Reed',
                'width' => 689,
                'height' => 688,
                'caption' => NULL,
                'filename' => 'REED.png',
            ),
            7 => 
            array (
                'id' => 9,
                'created_at' => '2018-11-06 16:56:12',
                'updated_at' => '2018-11-06 16:56:12',
                'deleted_at' => NULL,
                'uuid' => '61673188-a6a1-48dd-892f-a12b9c090467/STOVER.png',
                'alt_text' => 'Stover',
                'width' => 689,
                'height' => 688,
                'caption' => NULL,
                'filename' => 'STOVER.png',
            ),
            8 => 
            array (
                'id' => 10,
                'created_at' => '2018-11-06 16:56:12',
                'updated_at' => '2018-11-06 16:56:12',
                'deleted_at' => NULL,
                'uuid' => '61673188-a6a1-48dd-892f-a12b9c090467/SMYTH.png',
                'alt_text' => 'Smyth',
                'width' => 689,
                'height' => 688,
                'caption' => NULL,
                'filename' => 'SMYTH.png',
            ),
        ));
        
        
    }
}