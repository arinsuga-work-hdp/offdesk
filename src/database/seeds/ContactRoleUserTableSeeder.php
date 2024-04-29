<?php

use Illuminate\Database\Seeder;

class ContactRoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* rianti@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 11, //user(rianti@hadiprana.co.id)
        ]);

        /* gani@hadiprana.co.id  */
        DB::table('role_user')->insert([
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 12, //user(gani@hadiprana.co.id)
        ]);

    }
}
