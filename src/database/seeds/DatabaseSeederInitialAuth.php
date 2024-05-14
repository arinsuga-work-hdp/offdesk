<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitialAuth extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call('UsersTableSeeder');
        $this->call('AppsTableSeeder');
        $this->call('AppUserTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('RoleUserTableSeeder');

   }
}
