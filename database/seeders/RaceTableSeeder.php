<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Lecture 6: Task 1 - create seeder and add 5 races
        $r = new Race;
        $r->circuit_name = "Kilvey Hill Climb";
        $r->country = "Wales";
        $r->no_hours = 3;
        $r->date_of_race = "2023-01-01";
        $r->save();

        $r1 = new Race;
        $r1->circuit_name = "Forest of Dean Rally";
        $r1->country = "England";
        $r1->no_hours = 3;
        $r1->date_of_race = "2023-01-02";
        $r1->save();

        $r2 = new Race;
        $r2->circuit_name = "Spa-Francorchamps";
        $r2->country = "Belgium";
        $r2->no_hours = 6;
        $r2->date_of_race = "2023-04-29";
        $r2->save();

        $r3 = new Race;
        $r3->circuit_name = "Sebring";
        $r3->country = "USA";
        $r3->date_of_race = "2023-03-17";
        $r3->save();

        $r4 = new Race;
        $r4->circuit_name = "Bahrain International";
        $r4->country = "Bahrain";
        $r4->no_hours = 8;
        $r4->date_of_race = "2023-11-04";
        $r4->save();

        //add 20 randomly generated races
        Race::factory()->count(20)->create();
    }
}
