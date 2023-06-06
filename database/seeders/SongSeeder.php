<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 5000; $i++) {
            DB::table('songs')->insert([
                'name' => $faker->name,
                'singer' => $faker->name
            ]);
        }
    }
}
