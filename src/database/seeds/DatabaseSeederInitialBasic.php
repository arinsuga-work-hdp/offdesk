<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialBasic extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call('GenderTableSeeder');
        $this->call('BloodtypeTableSeeder');
        $this->call('ReligionTableSeeder');
        $this->call('NationalityTableSeeder');
        $this->call('EducationTableSeeder');

   }
}
