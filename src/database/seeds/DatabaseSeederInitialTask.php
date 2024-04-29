<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialTask extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ActivitytypeTableSeeder');
        $this->call('ActivitysubtypeTableSeeder');
        $this->call('ActivitystatusTableSeeder');

        $this->call('TasktypeTableSeeder');
        $this->call('Tasksubtype1TableSeeder');
        $this->call('Tasksubtype2TableSeeder');

   }
}
