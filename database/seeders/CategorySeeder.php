<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            "name" => "Fiction"
        ]);
        DB::table('category')->insert([
            "name" => "Self Development"
        ]);
        DB::table('category')->insert([
            "name" => "Manga"
        ]);
    }
}
