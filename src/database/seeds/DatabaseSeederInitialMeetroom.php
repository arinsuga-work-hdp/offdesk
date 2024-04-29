<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialMeetroom extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('OrderstatusTableSeeder');
        $this->call('RoomTableSeeder');

   }
}
