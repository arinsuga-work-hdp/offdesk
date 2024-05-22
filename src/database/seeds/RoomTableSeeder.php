<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("room")->delete();
        DB::table("room")->insert([ "id" => 1, "code" => "POSTMO", "name" => "Ruang Meeting Postmo", "displayname" => "Ruang Meeting Postmo", "description" => "Ruang Meeting Postmo", "numsort" => 10, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 2, "code" => "FOUNDER", "name" => "Ruang Meeting Founder", "displayname" => "Ruang Meeting Founder", "description" => "Ruang Meeting Founder", "numsort" => 20, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 3, "code" => "INTERIOR", "name" => "Ruang Meeting Interior", "displayname" => "Ruang Meeting Interior", "description" => "Ruang Meeting Interior", "numsort" => 30, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 4, "code" => "BULAT", "name" => "Ruang Meeting Bulat", "displayname" => "Ruang Meeting Bulat", "description" => "Ruang Meeting Bulat", "numsort" => 40, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 5, "code" => "FARIED", "name" => "Ruang Meeting Faried", "displayname" => "Ruang Meeting Faried", "description" => "Ruang Meeting Faried", "numsort" => 50, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 6, "code" => "ARSITEK", "name" => "Ruang Meeting Arsitek", "displayname" => "Ruang Meeting Arsitek", "description" => "Ruang Meeting Arsitek", "numsort" => 60, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 7, "code" => "SUPPORT", "name" => "Ruang Meeting Support", "displayname" => "Ruang Meeting Support", "description" => "Ruang Meeting Support", "numsort" => 70, "status" => 1, ]); 
        DB::table("room")->insert([ "id" => 8, "code" => "ANDRAWINA", "name" => "Ruang Meeting Andrawina", "displayname" => "Ruang Meeting Andrawina", "description" => "Ruang Meeting Andrawina", "numsort" => 80, "status" => 1, ]); 
        
    }
}
