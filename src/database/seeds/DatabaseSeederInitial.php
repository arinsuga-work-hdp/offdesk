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

        //$this->call('DatabaseSeederMeetroomv10');
        $this->call('DatabaseSeederMeetroomv20');

   }
}
