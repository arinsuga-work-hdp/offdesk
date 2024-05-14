<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialBasicHR extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('EmpstatusTableSeeder');
        $this->call('EmptypeTableSeeder');
        $this->call('InactivetypeTableSeeder');
        $this->call('JobTableSeeder');
        $this->call('SuperiorTableSeeder');
        $this->call('BranchTableSeeder');
        $this->call('DeptTableSeeder');
        $this->call('SubdeptTableSeeder');
        $this->call('BizunitTableSeeder');
        $this->call('LevelTableSeeder');

   }
}
