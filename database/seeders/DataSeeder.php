<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Data;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Data::create([
                'name' => $faker->sentence,
                'author' => $faker->name,
                'publish_date' => $faker->date,

            ]);
        }
    }
}
