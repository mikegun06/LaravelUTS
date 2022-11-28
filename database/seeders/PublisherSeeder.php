<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker; 

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        DB::table('publishers')->insert([
            "name" => "Kevin Kwan",
            "address" => $faker->address(),
            "phone" =>"+628".$faker->numberBetween(111111111,999999999),
            "email" => $faker->email(),
            "image" => "https://m.media-amazon.com/images/M/MV5BMTk4OTE1ODIzM15BMl5BanBnXkFtZTgwNzg3OTcxNjM@._V1_.jpg",
        ]);
        DB::table('publishers')->insert([
            "name" => "Tatsuya Endo",
            "address" => $faker->address(),
            "phone" =>"+628".$faker->numberBetween(111111111,999999999),
            "email" => $faker->email(),
            "image" => "https://upload.wikimedia.org/wikipedia/commons/e/ef/Tatsuyaendo_pic_sketch.png",
        ]);
        DB::table('publishers')->insert([
            "name" => "Morgan Housel",
            "address" => $faker->address(),
            "phone" =>"+628".$faker->numberBetween(111111111,999999999),
            "email" => $faker->email(),
            "image" => "https://media-exp1.licdn.com/dms/image/C5603AQHNm_N0EXeFtQ/profile-displayphoto-shrink_200_200/0/1663177069936?e=1675296000&v=beta&t=8PVxnHMdmRI473swg7_vUWB2c5_TspZpmNudyPRJQbEWest Chaimburgh, ND 02498-9770",
        ]);
    }
}
