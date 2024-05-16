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
        DB::table('role_user')
        ->where('app_id', 2)
        ->where('role_id', 201)
        ->where('user_id', 11)
        ->delete();
        DB::table('role_user')->insert([
            'id' => 7,
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 11, //user(rianti@hadiprana.co.id)
        ]);

        /* gani@hadiprana.co.id  */
        DB::table('role_user')
        ->where('app_id', 2)
        ->where('role_id', 201)
        ->where('user_id', 12)
        ->delete();
        DB::table('role_user')->insert([
            'id' => 8,
            'app_id' => 2, //app(office)
            'role_id' => 201, //role(adbook-admin)
            'user_id' => 12, //user(gani@hadiprana.co.id)
        ]);

    }
}
