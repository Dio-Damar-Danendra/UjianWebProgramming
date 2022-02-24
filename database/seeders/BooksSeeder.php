<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for($i = 1; $i<=100; $i++){
            \DB::table('books')->insert([
                'category_id' => $faker->numberBetween(1,7),
                'title' => 'Insert Book Title'
            ]);
        }
    }
}