<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t = new Team;
        $t->team_name = "Toyota Gazoo Racing";
        $t->car_id = 1
        $t->save();

        $t1 = new Team;
        $t1->team_name = "Hertz Team Jota";
        $t1->car_id = 2
        $t1->save();

        $t2 = new Team;
        $t2->team_name = "Iron Dames";
        $t2->car_id = 3
        $t2->save();
        
        //seed another 100 teams using team factory
        Team::factory()->count(100)->create();
    }
}
