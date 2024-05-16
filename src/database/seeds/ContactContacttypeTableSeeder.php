<?php

use Illuminate\Database\Seeder;

class ContactContacttypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Table reset
        DB::table("contacttype")->delete();
        DB::table("contacttype")->insert([ "id" => 1, "code" => "CLNT", "name" => "Client", "displayname" => "Suplier", "description" => "Suplier", "numsort" => 10, "status" => 1, ]); 
        DB::table("contacttype")->insert([ "id" => 2, "code" => "VEN", "name" => "Suplier", "displayname" => "Suplier", "description" => "Suplier", "numsort" => 20, "status" => 1, ]); 

    }
}
