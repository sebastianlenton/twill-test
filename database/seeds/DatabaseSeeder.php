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
        if( app()->isLocal() ) {
            $this->call(TwillUsersTableSeeder::class);
            $this->call(InfopagesTableSeeder::class);
            $this->call(JobsTableSeeder::class);
            $this->call(MediasTableSeeder::class);
            $this->call(MediablesTableSeeder::class);
            //$this->call(NewsitemsTableSeeder::class);
            $this->call(NewslinksTableSeeder::class);
            $this->call(SettingsTableSeeder::class);
            $this->call(SettingTranslationsTableSeeder::class);
            $this->call(StaffmembersTableSeeder::class);
            $this->call(DesignpagesTableSeeder::class);
            $this->call(ExperimentsTableSeeder::class);
            $this->call(ExperimentimagesTableSeeder::class);
            $this->call(IndexpagesTableSeeder::class);
            $this->call(ProjectsTableSeeder::class);
            $this->call(ProjecttagsTableSeeder::class);
            $this->call(BlocksTableSeeder::class);
            $this->call(ProjectSlugsTableSeeder::class);
            $this->call(ProjecttagSlugsTableSeeder::class);
            $this->call(ProjectProjecttagTableSeeder::class);
        }
    }
}
