<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5; $i++) {
            DB::table('bookcat')->insert([
                "book_id" => mt_rand(1,5),
                "category_id" => mt_rand(1,3)
            ]);
        }
    }
}
