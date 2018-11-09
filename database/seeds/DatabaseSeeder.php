<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TwillUsersTableSeeder::class);
        $this->call(InfopagesTableSeeder::class);
        $this->call(InfopageRevisionsTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(JobRevisionsTableSeeder::class);
        $this->call(MediasTableSeeder::class);
        $this->call(MediablesTableSeeder::class);
        $this->call(NewsitemsTableSeeder::class);
        $this->call(NewsitemRevisionsTableSeeder::class);
        $this->call(NewslinksTableSeeder::class);
        $this->call(NewslinkRevisionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SettingTranslationsTableSeeder::class);
        $this->call(StaffmembersTableSeeder::class);
        $this->call(DesignpagesTableSeeder::class);
        $this->call(DesignpageRevisionsTableSeeder::class);
    }
}
