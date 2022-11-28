<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        DB::table('book')->insert([
            "publisher_id" => mt_rand(1,2),
            "title" => "China Rich Girlfriend",
            "author" => "Kevin Kwan",
            "year" => $faker->year(),
            "synopsis" => $faker->paragraph(),
            "image" => "https://cf.shopee.co.id/file/0d08789a707f11a80309bcd1e56ad4f7"
        ]);
        DB::table('book')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Spy x Family",
            "author" => "Tatsuya Endo",
            "year" => $faker->year(),
            "synopsis" => $faker->paragraph(),
            "image" => "https://mangaplus.shueisha.co.jp/drm/title/100143/title_thumbnail_portrait_list/176953.jpg?key=d0c37f78e9341e22a368841b3981a70b&duration=86400"
        ]);
        DB::table('book')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "The Psychology of Money",
            "author" => "Morgan Housel",
            "year" => $faker->year(),
            "synopsis" => $faker->paragraph(),
            "image" => "https://m.media-amazon.com/images/I/417KWv-EtEL._AC_SY780_.jpg"
        ]);
        DB::table('book')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "Crazy Rich Asians",
            "author" => "Kevin Kwan",
            "year" => $faker->year(),
            "synopsis" => $faker->paragraph(),
            "image" => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1526735379l/18158562._SY475_.jpg"
        ]);
        DB::table('book')->insert([
            "publisher_id" => mt_rand(1,3),
            "title" => "50 Years in the Making",
            "author" => "Morgan Housel",
            "year" => $faker->year(),
            "synopsis" => $faker->paragraph(),
            "image" => "https://m.media-amazon.com/images/I/515V7k61vfL.jpg"
        ]);
    }
}
