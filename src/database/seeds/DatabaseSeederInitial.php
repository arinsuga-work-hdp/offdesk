<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitial extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call('DatabaseSeederInitialAuth');
        // $this->call('DatabaseSeederInitialBasic');
        // $this->call('DatabaseSeederInitialBasicHR');
        // $this->call('DatabaseSeederInitialTask');
        // $this->call('DatabaseSeederInitialMeetroom');
        $this->call('DatabaseSeederInitialContact');


   }
}
