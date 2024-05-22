<?php

use Illuminate\Database\Seeder;

class DatabaseSeederMeetroomv20 extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('RoomTableSeeder');

    }
}
