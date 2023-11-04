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
        $t->save();

        $t1 = new Team;
        $t1->team_name = "Hertz Team Jota";
        $t1->save();
        
        Team::factory()->count(100)->create();
    }
}
