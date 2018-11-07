<?php

use Illuminate\Database\Seeder;

class SettingTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_translations')->delete();
        
        \DB::table('setting_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-10-29 22:27:19',
                'updated_at' => '2018-10-31 10:28:19',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 1,
                'value' => 'Order',
            ),
            1 => 
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-10-31 10:13:08',
                'updated_at' => '2018-11-06 16:14:12',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 2,
                'value' => 'hello@order.design',
            ),
            2 => 
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-10-31 10:28:19',
                'updated_at' => '2018-11-06 16:14:12',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 3,
                'value' => 'Order',
            ),
            3 => 
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 4,
                'value' => 'order',
            ),
            4 => 
            array (
                'id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 5,
                'value' => '347 903 4722',
            ),
            5 => 
            array (
                'id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2018-11-06 16:14:12',
                'updated_at' => '2018-11-06 16:14:12',
                'locale' => 'en',
                'active' => 1,
                'setting_id' => 6,
                'value' => '212 Franklin St
Ground Floor
Brooklyn, NY 11222',
            ),
        ));
        
        
    }
}