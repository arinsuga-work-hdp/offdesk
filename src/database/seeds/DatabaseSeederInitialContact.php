<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialContact extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('ContactRoleUserTableSeeder');
        $this->call('ContactContacttypeTableSeeder');


    }
}
