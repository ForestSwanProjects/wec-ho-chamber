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
        $r = new Race;
        $r->circuit_name = "Swansea";
        $r->country = "Wales";
        $r->no_hours = 8;
        $r->date_of_race = "2023-01-01";
        $r->save();
    }
}
