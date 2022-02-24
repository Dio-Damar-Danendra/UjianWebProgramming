<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Provider\Lorem;
use Faker\Provider\DateTime;

use Faker\Factory as Faker;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');
        for($i = 0; $i<10; $i++){
            \DB::table('details')->insert([
                'book_id' => $faker->numberBetween(1001, 99999),
                'author' => $faker->name,
                'publisher' => 'Winston Publishing Ltd.',
                'year' => $faker->year('now'),
                'description' => $faker->paragraph(5, true)
            ]);
        }
    }

    public function details(){
        
    }
}
