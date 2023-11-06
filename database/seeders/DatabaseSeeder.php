<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Race;
use \App\Models\Car;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(TeamTableSeeder::class);
        //$this->call(RaceTableSeeder::class);
        //$this->call(CarTableSeeder::class);

        //creates 3 races with 20 cars in each and their respective teams
        Race::factory()->has(\App\Models\Car::factory()->has(\App\Models\Team::factory())->count(20))->count(3)->create();

    }
}
